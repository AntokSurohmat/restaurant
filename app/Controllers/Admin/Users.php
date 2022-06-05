<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Admin\UsersModel;
use \Hermawan\DataTables\DataTable;

class Users extends ResourceController
{
    protected $helpers= ['form', 'url', 'text', 'my_helper'];
    public function __construct()
    {
        $this->users      = new UsersModel();
        $this->csrfToken  = csrf_token();
        $this->csrfHash   = csrf_hash();
        $this->session    = \Config\Services::session();
        $this->db         = \Config\Database::connect();
        $this->validation = \Config\Services::validation();
        $this->session->start();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = array(
            'title' => 'Pengguna',
            'parent' => 5,
            'pmenu' => '',

        );
        return view('admin/users/v-users', $data);
    }

       /**
     * Load data serverside DataTables 
     *
     * @return mixed
     */
    public function getDataTable() {
        if (!$this->request->isAJAX()) {
            throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
        }
        $builder = $this->db->table('users')
                    ->select('id, username, email, nama, no_telp, is_admin')
                    ->where('deleted_at', null);
        return DataTable::of($builder)
        ->postQuery(function($builder) { $builder->orderBy('id', 'desc');})
        ->setSearchableColumns(['username', 'nama', 'email', 'no_telp'])
        ->add('checkbox', function($row) { return $row->id; }, 'first', 0)
        ->format('harga_menu', function($value){
            return 'Rp. '.number_format($value, 0,'','.');
        })
        ->add('aksi', function($row) {
            $button = "
            <a class='btn btn-sm btn-info view' href='". base_url('admin/users/'.$row->username) ."' name='view' data-id='" . $row->id . "' data-toggle='tooltip' data-placement='top' title='[ View Data ]'><i class='ft-eye'></i></a>
            <a class='btn btn-sm btn-warning edit' href='javascript:void(0)' name='edit' data-id='" . $row->id . "' data-toggle='tooltip' data-placement='top' title='[ Edit Data ]'><i class='ft-edit'></i></a>
            <a class='btn btn-sm btn-danger delete' href='javascript:void(0)' name='delete' data-id='" . $row->id . "' data-toggle='tooltip' data-placement='top' title='[ Delete Data ]'><i class='ft-trash'></i></a>
            ";
            return $button;
        }, 'last')
        ->addNumbering('no')
        ->toJson(true);
    }

    /**
     * Get single data by id 
     *
     * @return mixed
     */
    public function getData() {
        if (!$this->request->isAJAX()) {
            // throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
         }
         $users = $this->users->where('id', $this->request->getVar('id'))->where('deleted_at', null)->get();
         if($users->getRow() == null){
              return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
         }
         if (!$this->request->getVar('id')) {
              return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
         }
        if($this->request->getVar('id')) {
            $data = $this->users->where('id', $this->request->getVar('id'))->first();

            $data->csrfToken = $this->csrfHash;
            echo json_encode($data);
        }
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($username = null)
    {
        // d($username);print_r($username);exit();
        $users = $this->users->where('username', $username)->where('deleted_at', null)->get();
        // d($users->getRow()->id);print_r($users->getRow());exit();
        if($users->getRow() == null){
            return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
        }
        if (!$username) {
            return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
        }
        $data = array(
            'title' => 'Detail Pengguna',
            'parent' => 5,
            'pmenu' => '',
            'method' => 'View',
            'hidden_id' => $users->getRow()->id

        );
        return view('admin/users/v-userView', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        if (!$this->request->isAJAX()) {
            throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
        }
        if ($this->request->getVar('id')) {
            
            $id = $this->request->getVar('id');
            $users = $this->users->where(['id' => $id, 'deleted_at' => null])->get();
            if($users->getRow() == null){
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            if (!$id) {
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            if ($this->users->where('id', $id)->delete($id)) {
                $data = array('success' => true, 'msg' => 'Data Berhasil dihapus');
            } else {
                $data = array('success' => false, 'msg' => 'Terjadi kesalahan dalam memilah data');
            }
        }else{
            $data = array('success' => false, 'msg' => 'Tidak ada data yang dipilih');
        }
        $data[$this->csrfToken] = $this->csrfHash;
        echo json_encode($data);
    }

     /**
     * Delete Multiple 
     *
     * @return mixed
     */
    public function deleteMultiple($ids = null)
    {
        if (!$this->request->isAJAX()) {
            throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
        }
        if ($this->request->getVar('ids')) {
            $ids = $this->request->getVar('ids');
            $users = $this->users->whereIn('id', $ids)->where('deleted_at', null)->get();
            if($users->getResult() == null){
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            if (!$ids) {
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            
            if ($this->users->whereIn('id', $ids)->delete($ids)) {
                $data = array('success' => true, 'msg' => 'Data Berhasil dihapus');
            } else {
                $data = array('success' => false, 'msg' => 'Terjadi kesalahan dalam memilah data');
            }
        }else{
            $data = array('success' => false, 'msg' => 'Tidak ada data yang dipilih');
        }
        $data[$this->csrfToken] = $this->csrfHash;
        echo json_encode($data);
    }
}
