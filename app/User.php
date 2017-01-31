<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student(){

        return $this->belongsTo('App\Student');
    }

    public function faculty(){
        return $this->belongsTo('App\Faculty');

    }

//    public function department(){
//
//        return $this->belongsTo('App\Department');
//    }

//    public function post(){
//
//        return $this->hasMany('App\Post');
//    }

//    public function subject(){
//
//        return $this->belongsToMany('App\Subject');
//    }

//    public function lecture(){
//
//        return $this->hasMany('App\Lecture');
//    }


    public static function UserRole($number){

        switch ($number){

            case 0:
                return 'admin';
                break;

            case 1:
                return 'faculty';
                break;

            case 2:
                return 'faculty';
                break;

            case 3:
                return 'student';
                break;

            default:
                return "null";
        }
    }
}
