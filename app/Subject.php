<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
//    public function users()
//    {
//        return $this->belongsToMany('App\User');
//    }

//    public static function department($department_id)
//    {
//
//    }

    public function scopeDepartment($query, $department_id)
    {
        return $query->where('department_id', $department_id)
            ->get();
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


}
