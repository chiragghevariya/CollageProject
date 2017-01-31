<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function getlogin(){

        return view('loginAndRegister.auth.login');
    }

    public function authenticate(Request $request){

        $email =  $request->email;
        $password =$request->password;

        if(\Auth::attempt(['email'=>$email,'password' =>$password])){

            if(\Auth::user()->role == 0){

                return redirect()->Route('adminhome');
            }
            else
            {

                return redirect()->back();
            }


        }

    }


    public function logout()
    {

        \Auth::logout();
        return redirect()->to('/');
    }
}
