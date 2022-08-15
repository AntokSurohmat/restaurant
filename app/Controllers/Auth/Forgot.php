<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Forgot extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Forgot Password',
        );
        return view('auth/forgot/v-forgot', $data);
    }
}
