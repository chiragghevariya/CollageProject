<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function getRegister(){

        return view('loginAndRegister.auth.register-select');
    }

    public function getStudentRegister(){

        return view('loginAndREgister.all-register.student');

    }

    public function studentRegister(Request $request){

        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =bcrypt($request->password);
        $user->save();

        return "success full";

    }
}
