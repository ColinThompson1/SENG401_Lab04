<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'book_id', 'user_id', 'text',
    ];

    public function users()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function books()
    {
      return $this->belongsTo('App\Models\Book');
    }
}
