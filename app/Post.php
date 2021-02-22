<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'text',
        'author'
    ];
    public function info() {
        return $this->hasOne('App\InfoPost');
    }

    public function comment() {
        return $this->hasMany('App\Comment');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
