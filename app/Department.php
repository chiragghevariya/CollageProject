<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable =[

        'department'

    ];

    public function faculties(){

        return $this->hasMany('App\User')->whereIn('role',['1','2']);
    }

    public function students(){

        return $this->belongsTo('App\User')->where('role',3);
    }

//    public static  function Name($id)
//    {
//        return Department::find($id)->name;
//    }
}
