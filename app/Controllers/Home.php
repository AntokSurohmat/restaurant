<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $data = array(
            'title' => 'Dashboard',
            'lmenu' => 1,

        );
        return view('home/layouts/default', $data);
    }
}
