<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Contact',
            'lmenu' => 4,
        );
        return view('home/contact', $data);
    }
}
