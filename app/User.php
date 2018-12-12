<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    public function role()
    {
        return $this->hasOne('App/Role','role_id');
    }
}
