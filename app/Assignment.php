<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function scopeAuth($query)
    {
        return $query->where('user_id',\Auth::user()->id);
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

}
