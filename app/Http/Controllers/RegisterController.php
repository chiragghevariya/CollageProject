<?php

namespace App\Http\Controllers;

use App\Faculty;
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

    public function getFacultyRegister(){

        return view('loginAndREgister.all-register.faculty');

    }

    public function studentRegister(Request $request){

        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->address =$request->address;
        $user->role =3;
//        3.Student
        $user->password =bcrypt($request->password);
        $user->save();

        $student =new Student();
        $student->user_id =$user->id;
        $student->Enrollment =$request->enroll;
        $student->save();

        return "success full";

    }


    public function facultyRegister(Request $request){

        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->address =$request->address;
        $user->role =2;
//        2. faculty
        $user->password =bcrypt($request->password);
        $user->save();

        $faculty =new Faculty();
        $faculty->user_id =$user->id;
        $faculty->info =$request->info;
        $faculty->save();

        return "success full";

    }



}
