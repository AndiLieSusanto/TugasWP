<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class User extends Model
{


    public function role()
    {
        return $this->hasOne('App\Role','id','role_id');
    }

    public function gender()
    {
        return $this->hasOne('App\Gender','id','gender_id');
    }

}
