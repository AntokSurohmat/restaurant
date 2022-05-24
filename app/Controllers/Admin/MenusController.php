<?php

namespace App\Controllers\Admin;

use App\Models\Admin\MenusModel;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;

class MenusController extends ResourceController
{
    protected $helpers= ['form', 'url', 'text'];
    public function __construct()
    {
        $this->menus      = new MenusModel();
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
            'title' => 'Daftar Menu',
            'parent' => 2,
            'pmenu' => '',

        );
        return view('admin/menu/v-menu', $data);
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

        $builder = $this->db->table('menus')->select('id, kode_menu, nama_menu, harga_menu, deskripsi_menu');
        return DataTable::of($builder)
        ->postQuery(function($builder){ $builder->orderBy('id', 'desc');$builder->where('deleted_at', null);})
        ->add('checkbox', function($row) {
            $checkbox = $row->id; 
            return $checkbox;}, 'first', 0)
        ->setSearchableColumns(['kode_menu', 'nama_menu'])
        ->format('harga_menu', function($value){
            return 'Rp. '.number_format($value, 0,'','.');
        })
        ->add('aksi', function($row){
            $button = "
            <a class='btn btn-sm btn-warning edit' href='javascript:void(0)' name='edit' data-id='" . $row->id . "' data-toggle='tooltip' data-placement='top' title='[ Edit Data ]'><i class='ft-edit'></i></a>
            <a class='btn btn-sm btn-danger delete' href='javascript:void(0)' name='delete' data-id='" . $row->id . "' data-toggle='tooltip' data-placement='top' title='[ Delete Data ]'><i class='ft-trash'></i></a>
            ";
            return $button;
        }, 'last')
        ->addNumbering('no')
        ->toJson(true);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
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
        if (!$this->request->isAJAX()) {
            // throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $valid = $this->validate([
            'kodeMenuAddEditForm' => [
                'label'  => 'Kode Menu',
                'rules'  => 'required|numeric|max_length[11]|min_length[3]|is_unique[menus.kode_menu]',
                'errors' => [
                    'numeric'    => '{field} Hanya Bisa Memasukkan Angka',
                    'max_length' => '{field} Maksimal 11 Karakter',
                    'min_length' => '{field} Minimal Memasukkan 3 Karakter',
                    'is_unique'  => '{field} Kode Yang Anda masukkan sudah dipakai',
                ],
            ],
            'namaMenuAddEditForm' => [
                'label'  => 'Nama Menu',
                'rules'  => 'required|alpha_space|max_length[30]|min_length[3]',
                'errors' => [
                'alpha_space' => '{field} Hanya Boleh Memasukkan Huruf',
                'max_length'  => '{field} Maksimal Memasukkan 30 Karakter',
                'min_length'  => '{field} Minimal Memasukkan 3 Karakter'
                ],
            ],
            'hargaMenuAddEditForm' => [
                'label'  => 'Harga Menu',
                'rules'  => 'required|numeric|max_length[20]|min_length[3]',
                'errors' => [
                'numeric'    => '{field} Hanya Boleh Memasukkan Angka',
                'max_length' => '{field} Maksimal Memasukkan 20 Karakter',
                'min_length' => '{field} Minimal Memasukkan 3 Karakter'
                ],
            ],
            "fotoMenuAddEditForm" => [
                'label'  => 'Foto Menu',
                'rules'  => 'is_image[fotoMenuAddEditForm]'
                            .'|mime_in[fotoMenuAddEditForm,image/jpg,image/jpeg,image/gif,image/png]'
                            .'|max_size[fotoMenuAddEditForm,2048]',
                'errors' => [
					'mime_in'  => '{field} File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => '{field} Ukuran File Maksimal 2 MB'
                ],
            ],
            'deskripsiMenuAddEditForm' => [
                'label'  => 'Deskripsi Menu',
                'rules'  => 'required|alpha_numeric_punct|max_length[50]|min_length[3]',
                'errors' => [
                'alpha_numeric_punct' => '{field} Hanya Boleh Memasukkan Huruf + Angka',
                'max_length'          => '{field} Maksimal Memasukkan 50 Karakter',
                'min_length'          => '{field} Minimal Memasukkan 3 Karakter'
                ],
            ],
        ]);

        if (!$valid) {
            $data = [
                'success' => false,
                'error' => [
                    'kodeMenu'      => $this->validation->getError('kodeMenuAddEditForm'),
                    'namaMenu'      => $this->validation->getError('namaMenuAddEditForm'),
                    'hargaMenu'     => $this->validation->getError('hargaMenuAddEditForm'),
                    'fotoMenu'      => $this->validation->getError('fotoMenuAddEditForm'),
                    'deskripsiMenu' => $this->validation->getError('deskripsiMenuAddEditForm'),
                ],
                'msg' => 'Terjadi kesalahan dalam memasukkan data. Silahkan di teliti lagi',
            ];
        } else {

            $file = $this->request->getFile('fotoMenuAddEditForm');
            if($file->isValid() && !$file->hasMoved()){
                $imageName = $file->getRandomName();
                $file->move('uploads/menu/', $imageName);
            }else{$imageName = 'default.jpg';}

            $data = [
                'kode_menu'      => $this->db->escapeString($this->request->getPost('kodeMenuAddEditForm')),
                'nama_menu'      => $this->db->escapeString($this->request->getPost('namaMenuAddEditForm')),
                'harga_menu'     => $this->db->escapeString($this->request->getPost('hargaMenuAddEditForm')),
                'foto_menu'      => $this->db->escapeString($imageName),
                'deskripsi_menu' => $this->db->escapeString($this->request->getPost('deskripsiMenuAddEditForm')),
            ];

            if( $this->menus->insert($data)){
                $data = array('success' => true, 'msg' => 'Data Berhasil di masukkan');
            }else{
                $data = array('success' => false, 'error' => $this->menus->errors(), 'msg' => 'Terjadi kesalahan dalam memasukkan data. Silahkan di teliti lagi');
            }
        }
        $data['msg'] =$data['msg'];
        $data[$this->csrfToken] = $this->csrfHash;
        return $this->response->setJSON($data);
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
            $menus = $this->menus->where(['id' => $id, 'deleted_at' => null])->get();
            if($menus->getRow() == null){
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            if (!$id) {
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            $prop_item = $this->menus->where('id', $id)->first();
            $imageName = $prop_item->foto_menu;
            
            if ($imageName != NULL && $imageName != 'default.jpg') {
                if(file_exists("uploads/menu/".$imageName)){
                    unlink("uploads/menu/".$imageName); 
                }
            }

            if ($this->menus->where('id', $id)->delete($id)) {
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
            $menus = $this->menus->whereIn('id', $ids)->where('deleted_at', null)->get();
            if($menus->getResult() == null){
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            if (!$ids) {
                return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
            }
            
            if ($this->menus->whereIn('id', $ids)->delete($ids)) {
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
