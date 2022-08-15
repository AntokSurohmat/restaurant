<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Admin\MenusModel;
use \Hermawan\DataTables\DataTable;

class Menus extends ResourceController
{
    protected $helpers= ['form', 'url', 'text', 'my_helper'];
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
        return view('admin/menus/v-menus', $data);
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
        $builder = $this->db->table('menus')
                    ->select('id, kode_menu, nama_menu, harga_menu, foto_menu, deskripsi_menu')
                    ->where('deleted_at', null);
        return DataTable::of($builder)
        ->postQuery(function($builder) { $builder->orderBy('id', 'desc');})
        ->setSearchableColumns(['kode_menu', 'nama_menu'])
        ->add('checkbox', function($row) { return $row->id; }, 'first', 0)
        ->add('foto-nama', function($row) {
            if($row->foto_menu == 'default.jpg') {
                $foto = '<div class="media" >'
                            .'<div class="media-left pr-1">'
                                .'<span class="avatar" data-toggle="popover-image" data-img="'. base_url('/assets/custom/img/default.jpg') .'" title="<strong>'. $row->nama_menu .'</strong>">'
                                    .'<img src="'. base_url('/assets/custom/img/default.jpg') .'" alt="avatar"><i></i>'
                                .'</span>'
                            .'</div>'
                            .'<div class="media-body media-middle pt-05">'
                                .'<span class="media-heading name">'. $row->nama_menu .'</span>'
                            .'</div>'
                        .'</div>';
            }else{
                $foto = '<div class="media" >'
                            .'<div class="media-left pr-1">'
                                .'<span class="avatar" data-toggle="popover-image" data-img="'. base_url('/uploads/menu/'. $row->foto_menu) .'" title="<strong>'. $row->nama_menu .'</strong>">'
                                    .'<img src="'. base_url('/uploads/menu/'. $row->foto_menu) .'" alt="avatar"><i></i>'
                                .'</span>'
                            .'</div>'
                            .'<div class="media-body media-middle pt-05">'
                                .'<span class="media-heading name">'. $row->nama_menu .'</span>'
                            .'</div>'
                        .'</div>';
            }
            return $foto;
        }, 'first', 2)
        ->format('harga_menu', function($value){
            return 'Rp. '.number_format($value, 0,'','.');
        })
        ->add('aksi', function($row) {
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
     * Get single data by id 
     *
     * @return mixed
     */
    public function getData() {
        if (!$this->request->isAJAX()) {
            // throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
         }
         $menus = $this->menus->where('id', $this->request->getVar('id'))->where('deleted_at', null)->get();
         if($menus->getRow() == null){
              return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
         }
         if (!$this->request->getVar('id')) {
              return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
         }
        if($this->request->getVar('id')) {
            $data = $this->menus->where('id', $this->request->getVar('id'))->first();

            $data->csrfToken = $this->csrfHash;
            echo json_encode($data);
        }
    }

    /**
     * Generate Ramdom Number 6 character 
     *
     * @return mixed
     */
    function getRandomNumber(){
        if (!$this->request->isAJAX()) {
           throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
        }
        $data['kode'] = random_string('numeric', 6);
        $data[$this->csrfToken] = $this->csrfHash;
        echo json_encode($data);
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
            'jenisMenuAddEditForm' => [
                'label'  => 'Jenis Menu',
                'rules'  => 'required',
            ],
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
                    'jenisMenu'     => $this->validation->getError('jenisMenuAddEditForm'),
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
                'kode_menu'      => $this->db->escapeString($this->request->getPost('jenisMenuAddEditForm').$this->request->getPost('kodeMenuAddEditForm')),
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
        if (!$this->request->isAJAX()) {
        throw new \CodeIgniter\Router\Exceptions\RedirectException(base_url('/forbidden'));
        }
        $menus = $this->menus->where('id', $this->request->getVar('hidden_id'))->where('deleted_at', null)->get();
        if($menus->getRow() == null){
            return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
        }
        if (!$this->request->getVar('hidden_id')) {
            return redirect()->back()->with('error', 'Data Yang Anda Inginkan Tidak Mempunyai ID');
        }
        $valid = $this->validate([
            'jenisMenuAddEditForm' => [
                'label'  => 'Jenis Menu',
                'rules'  => 'required',
            ],
            'kodeMenuAddEditForm' => [
                'label'  => 'Kode Menu',
                'rules'  => 'required|numeric|max_length[11]|min_length[3]',
                'errors' => [
                    'numeric'    => '{field} Hanya Bisa Memasukkan Angka',
                    'max_length' => '{field} Maksimal 11 Karakter',
                    'min_length' => '{field} Minimal Memasukkan 3 Karakter',
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
                    'jenisMenu'     => $this->validation->getError('jenisMenuAddEditForm'),
                    'kodeMenu'      => $this->validation->getError('kodeMenuAddEditForm'),
                    'namaMenu'      => $this->validation->getError('namaMenuAddEditForm'),
                    'hargaMenu'     => $this->validation->getError('hargaMenuAddEditForm'),
                    'fotoMenu'      => $this->validation->getError('fotoMenuAddEditForm'),
                    'deskripsiMenu' => $this->validation->getError('deskripsiMenuAddEditForm'),
                ],
                'msg' => 'Terjadi kesalahan dalam memasukkan data. Silahkan di teliti lagi',
            ];
        } else {
            $prop_item = $this->menus->where('id', $this->request->getVar('hidden_id'))->first();
            $old_image = $prop_item->foto_menu;
            $file = $this->request->getFile('fotoMenuAddEditForm');
            if($file->isValid() && !$file->hasMoved()){
                if(file_exists("uploads/menu/".$old_image)){
                    unlink("uploads/menu/".$old_image);
                }
                $imageName = $file->getRandomName();
                $file->move('uploads/menu/', $imageName);
            }else{
                $imageName = $old_image;
            }

            $data = [
                'kode_menu'      => $this->db->escapeString($this->request->getPost('jenisMenuAddEditForm').$this->request->getPost('kodeMenuAddEditForm')),
                'nama_menu'      => $this->db->escapeString($this->request->getPost('namaMenuAddEditForm')),
                'harga_menu'     => $this->db->escapeString($this->request->getPost('hargaMenuAddEditForm')),
                'foto_menu'      => $this->db->escapeString($imageName),
                'deskripsi_menu' => $this->db->escapeString($this->request->getPost('deskripsiMenuAddEditForm')),

            ];
            $id = $this->request->getVar('hidden_id');
            if ($this->menus->update($id, $data)) {
                $data = array('success' => true, 'msg' => 'Data Berhasil dirubah');
            } else {
                $data = array('success' => false, 'error' => $this->menus->errors(), 'msg' => 'Terjadi kesalahan dalam memilah data');
            }
        }

        $data['msg'] =$data['msg'];
        $data[$this->csrfToken] = $this->csrfHash;
        return $this->response->setJSON($data);
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
