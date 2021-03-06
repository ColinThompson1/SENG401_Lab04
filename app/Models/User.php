<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
		use Notifiable;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
				'role', 'email', 'password', 'birthday', 'education',
		];

		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden = [
				'password', 'remember_token',
		];

		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
				'email_verified_at' => 'datetime',
		];

		/**
		* Users can be subscribed to multiple CreateBooksTable
		**/
		public function books()
		{
			return $this->belongsToMany('App\Models\Book', 'subscription');
		}
		/**
		* Users can have multiple comments
		**/
		public function comments()
		{
			return $this->hasMany('App\Models\Comment');
		}
}
