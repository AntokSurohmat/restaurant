<?php

namespace App\Controllers\Admin;

use App\Models\Admin\MenusModel;
use CodeIgniter\RESTful\ResourceController;

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

        $valid = $this->validate([
            'kodeMenuAddEditForm' => [
                'label'  => 'Kode Menu',
                'rules'  => 'required|numeric|max_length[11]|is_unique[menus.kode_menu]',
                'errors' => [
                    'numeric'    => '{field} Hanya Bisa Memasukkan Angka',
                    'max_length' => '{field} Maksimal 11 Karakter',
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
                'numeric'    => '{field}  Hanya Boleh Memasukkan Angka',
                'max_length' => '{field}  Maksimal Memasukkan 20 Karakter',
                'min_length' => '{field}  Minimal Memasukkan 3 Karakter'
                ],
            ],
            'deskripsiMenuAddEditForm' => [
                'label'  => 'Deskripsi Menu',
                'rules'  => 'required|alpha_numeric_punct|max_length[50]|min_length[3]',
                'errors' => [
                'alpha_numeric_punct' => 'Hanya Boleh Memasukkan Huruf + Angka',
                'max_length'          => 'Maksimal Memasukkan 50 Karakter',
                'min_length'          => 'Minimal Memasukkan 3 Karakter'
                ],
            ],
        ]);

        if (!$valid) {
            $data = [
                'error' => [
                    'kodeMenu'      => $this->validation->getError('kodeMenuAddEditForm'),
                    'namaMenu'      => $this->validation->getError('namaMenuAddEditForm'),
                    'hargaMenu'     => $this->validation->getError('hargaMenuAddEditForm'),
                    'deskripsiMenu' => $this->validation->getError('deskripsiMenuAddEditForm'),
                ],
                'msg' => $this->validation->getErrors(),
            ];
        } else {
            $data = [
                'kode_menu'      => $this->db->escapeString($this->request->getVar('kodeMenuAddEditForm')),
                'nama_menu'      => $this->db->escapeString($this->request->getVar('namaMenuAddEditForm')),
                'harga_menu'     => $this->db->escapeString($this->request->getVar('hargaMenuAddEditForm')),
                'deskripsi_menu' => $this->db->escapeString($this->request->getVar('deskripsiMenuAddEditForm')),
            ];

            if( $this->menus->insert($data)){
                d(true);print_r(true);
            }else{
                d(false);print_r(false);
            }

            die();
        }
        $data['msg'] =$data['msg'];
        $data[$this->csrfToken] = $this->csrfHash;
        echo json_encode($data);
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
