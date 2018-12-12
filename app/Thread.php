<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function thread() {
    	return $this->hasOne(Category::class); 
    }
}
