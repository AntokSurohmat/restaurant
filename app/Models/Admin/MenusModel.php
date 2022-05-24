<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class MenusModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'menus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_menu', 'nama_menu', 'harga_menu', 'foto_menu', 'deskripsi_menu'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'kode_menu'      => 'required|numeric|max_length[11]|min_length[3]',
        'nama_menu'      => 'required|alpha_space|max_length[30]|min_length[3]',
        'harga_menu'     => 'required|numeric|max_length[20]|min_length[3]',
        'foto_menu'      => 'permit_empty|string',
        'deskripsi_menu' => 'required|alpha_numeric_punct|max_length[50]|min_length[3]',
    ];
    protected $validationMessages   = [
        'kode_menu' => [
            'numeric'    => 'Hanya Boleh Memasukkan Angka',
            'max_length' => 'Maksimal 11 Karakter',
            'min_length' => 'Minimal Memasukkan 3 Karakter',
        ],
        'nama_menu' => [
            'alpha_space' => 'Hanya Boleh Memasukkan Huruf',
            'max_length'  => 'Maksimal Memasukkan 30 Karakter',
            'min_length'  => 'Minimal Memasukkan 3 Karakter'
        ],
        'harga_menu' => [
            'numeric'    => 'Hanya Boleh Memasukkan Angka',
            'max_length' => 'Maksimal Memasukkan 20 Karakter',
            'min_length' => 'Minimal Memasukkan 3 Karakter'
        ],
        'deskripsi_menu' => [
            'alpha_numeric_punct' => 'Hanya Boleh Memasukkan Huruf + Angka',
            'max_length'          => 'Maksimal Memasukkan 50 Karakter',
            'min_length'          => 'Minimal Memasukkan 3 Karakter'

        ],
    ];
    protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
