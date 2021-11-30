<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('user.login.login');
    }
    public function register()
    {
        return view('user.login.regiser');
    }
}