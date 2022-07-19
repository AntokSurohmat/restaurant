<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Shop',
            'lmenu' => 3,
        );
        return view('home/shop', $data);
    }
}
