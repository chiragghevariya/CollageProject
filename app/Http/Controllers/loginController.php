<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function getlogin(){

        return view('loginAndRegister.auth.login');
    }
}
