<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('auth/register/v-register', $data);
    }
}
