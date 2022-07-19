<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'About Us',
            'lmenu' => 2,
        );
        return view('home/about', $data);
    }
}
