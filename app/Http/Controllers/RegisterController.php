<?php

namespace App\Http\Controllers;

use App\Student;
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
        $user->phone =$request->phone;
        $user->address =$request->address;
        $user->password =bcrypt($request->password);
        $user->save();

        $student =new Student();
        $student->Enrollment =$request->enroll;
        $student->save();

        return "success full";

    }
}
