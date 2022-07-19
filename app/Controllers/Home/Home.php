<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'lmenu' => 1,
        );
        return view('home/index', $data);
    }
}