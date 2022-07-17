<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data = array(
            'lmenu' => 2,

        );
        return view('home/about', $data);
    }
}
