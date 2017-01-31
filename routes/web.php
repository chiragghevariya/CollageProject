<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//*********   Login and Registration of student and faculty or HOD  ***********************

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('layout.welcome');
});




Route::get('getregistration',['uses' =>'RegisterController@getRegister']);


Route::get('register/student',['uses'=>'RegisterController@getStudentRegister']);
Route::post('register/student',['as'=>'student.login','uses'=>'RegisterController@studentRegister']);


Route::get('register/faculty',['uses'=>'RegisterController@getFacultyRegister']);
Route::post('register/faculty',['as'=>'faculty.login','uses'=>'RegisterController@facultyRegister']);



//************ Admin section with Create department ***********************************************


Route::get('admin-home',['as'=>'adminhome',function (Request $request){

    if(\Auth::check())

    return view('all-section.admin.home');

    else
        return redirect('/');
}]);

Route::resource('admin/department','DepartmentController');


//***********Faculty section *****************************************8



Route::get('faculty-home',function (){

    return view('all-section.faculty.home');

});


Route::resource('faculty/post','PostController');

Route::resource('faculty/lecture','LectureController');




Route::resource('faculty/subject','SubjectController');


//**********************Authentication section *****************************8


Route::get('getlogin',['uses'=> 'loginController@getlogin']);

Route::post('getlogin',['uses' =>'loginController@authenticate']);


Route::get('/logout',['as'=>'logout','uses'=>'loginController@logout']);









