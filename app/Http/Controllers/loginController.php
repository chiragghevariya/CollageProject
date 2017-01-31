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

//        if(\Auth::check())
//        {
//            return redirect('logout');
//        }

        $email =  $request->email;
        $password =$request->password;

        if(Auth::attempt(['email'=>$email,'password' =>$password]))
        {

            return redirect()->intended('all-section/'.\App\User::UserRole(Auth::user()->role).'/home');
        }

            else
            {

                return redirect()->back();
            }


        }




    public function logout()
    {

        \Auth::logout();
        return redirect()->to('/');
    }
}
