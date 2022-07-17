<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = array(
            'lmenu' => 1,

        );
        return view('home/index', $data);
    }
}