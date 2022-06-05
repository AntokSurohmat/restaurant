<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class UsersModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'nama', ' email', 'password', 'no_telp', 'alamat'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        // 'username' => 'required|alpha_numeric|max_length[20]|min_length[3]',
        // 'nama'     => 'required|alpha_space|max_length[30]|min_length[3]',
        // 'email'    => 'required|valid_email|max_length[30]|min_length[3]',
        // 'password' => 'required|max_length[255]|min_length[3]',
        // 'no_telp'  => 'required|numeric|max_length[18]|min_length[3]',
        // 'alamat'   => 'permit_empty|alpha_numeric_punct',
    ];
    protected $validationMessages   = [
        'username' => [
            'alpha_numeric' => 'Hanya Boleh Memasukkan Angka dan Huruf',
            'max_length'    => 'Maksimal 20 Karakter',
            'min_length'    => 'Minimal Memasukkan 3 Karakter',
        ],
        'nama' => [
            'alpha_space' => 'Hanya Boleh Memasukkan Huruf',
            'max_length'  => 'Maksimal Memasukkan 30 Karakter',
            'min_length'  => 'Minimal Memasukkan 3 Karakter'
        ],
        'email' => [
            'valid_email' => 'Masukkan EMail yang valid',
            'max_length'  => 'Maksimal Memasukkan 30 Karakter',
            'min_length'  => 'Minimal Memasukkan 3 Karakter'
        ],
        'password' => [
            'max_length' => 'Maksimal Memasukkan 255 Karakter',
            'min_length' => 'Minimal Memasukkan 3 Karakter'
        ],
        'no_telp' => [
            'numeric'    => 'Hanya Boleh Memasukkan Angka',
            'max_length' => 'Maksimal Memasukkan 50 Karakter',
            'min_length' => 'Minimal Memasukkan 3 Karakter'
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
