<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    public function info() {
        return $this->hasOne('App\InfoPost');
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }
}
