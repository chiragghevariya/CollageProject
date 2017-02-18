<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public static function photo($id)
    {
        return Profile::find($id)->photo;
    }
}
