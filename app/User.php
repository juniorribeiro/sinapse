<?php

namespace App;
use App\Faster;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class User extends Authenticatable {
//class User extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function faster() {

		//    return $this->hasMany('App\Faster');
		return $this->hasOne('App\Faster');
	}
}
