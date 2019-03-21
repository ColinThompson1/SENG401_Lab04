<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
            'user_id', 'book_id'
        ];

    public function users()
    {
        $this->belongsTo('App\Models\User');
    }

    public function books()
    {
        $this->belongsTo('App\Models\Book');
    }
}
