<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'lmenu' => 1,

        );
        return view('customer/index', $data);
    }
}
