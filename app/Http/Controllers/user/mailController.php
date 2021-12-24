<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mailController extends Controller
{
    //
    public function confirmEmail(Request $request)
    {
        return view('user.confirmEmail.index');
    }
}