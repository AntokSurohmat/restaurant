<?php

namespace App\Controllers\Admin;

use App\Models\Admin\OrdersModel;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;

class Orders extends ResourceController
{
    protected $helpers= ['form', 'url', 'text', 'my_helper'];
    public function __construct()
    {
        $this->orders      = new OrdersModel();
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
            'title' => 'List Pesanan',
            'parent' => 2,
            'pmenu' => '',

        );
        return view('admin/orders/v-orders', $data);
    }

    /**
    * Load data severside DataTables
    *
    * @return mixed
    */
    public function getDataTable() {
        // if (!$this->request->isAJAX()) {
        //     throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
        // }
        $builder = $this->db->table('orders')
                    ->select('id_order, kode_order, nama, waktu, meja, status_order')
                    ->where('deleted_at', null);
        return DataTable::of($builder)
        ->postQuery( function($builder) {$builder->orderBy('id_order', 'desc');})
        ->setSearchableColumns(['kode_order', 'nama', 'waktu', 'meja'])
        ->add('checkbox', function($row) { return $row->id_order;}, 'first', 0)
        ->add('aksi', function($row) {
            $button= "
            <a class='btn btn-sm btn-warning edit' href='javascript:void(0)' name='edit' data-id='" . $row->id . "' data-toggle='tooltoip' data-placement='top' title=' ['Edit Data] '><i class='ft-edit'></i></a>
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
        $data = array(
            'title' => 'Tambah Pesanan',
            'parent' => 2,
            'pmenu' => '',
            'method' => 'New',
            'hidden_id' => '',
        );
        return view('admin/orders/v-orderAdd', $data);
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
        //
    }
}
