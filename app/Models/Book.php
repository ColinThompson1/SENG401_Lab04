<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{


    public function users()
    {
      return $this->belongsToMany('App/User', "subscription");
    }

    public function authors()
    {
      return $this->belongsToMany('App/Author');
    }

    public function comments()
    {
      return $this->hasMany('App/Comment');
    }
}
