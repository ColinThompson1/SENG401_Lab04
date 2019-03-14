<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users()
    {
      return $this->belongsTo('App/User');
    }

    public function books()
    {
      return $this->belongsTo('App/Book');
    }
}
