<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('auth/login/v-login', $data);
    }
}
