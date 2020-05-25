<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //岩下さん
    public function login(Request $request)
    {
      return view('login');
    }

    public function login_succsess(Request $request)
    {
      return view('login');
    }
}
