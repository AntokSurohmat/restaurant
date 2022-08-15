<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'parent' => 1,
            'pmenu' => '',
        );
        return view('admin/index', $data);
    }
}
