<?php

namespace App\Http\Controllers;

use App\Department;
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

        $department =Department::all();
        return view('loginAndREgister.all-register.student',['department'=>$department]);

    }

    public function getFacultyRegister(){

        $department =Department::all();
        return view('loginAndREgister.all-register.faculty',['department'=>$department]);

    }

    public function studentRegister(Request $request){

        $this->validate($request,[

            'name' =>'required',
            'email' =>'required|unique:users',
            'phone'=>'required|max:10',
            'address'=>'required',
            'semester'=>'required',
            'password'=>'required',
            'enroll'=>'required',

        ]);

        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->address =$request->address;
        $user->department_id =$request->department_id;
        $user->semester =$request->semester;
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


        $this->validate($request,[

            'name' =>'required',
            'email' =>'required|unique:users',
            'phone'=>'required|max:10',
            'address'=>'required',
            'password'=>'required',
            'info'=>'required',
        ]);


        $user =new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->department_id =$request->department_id;
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
