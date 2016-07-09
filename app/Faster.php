<?php

namespace App;
use App\Faster;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Faster extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	/**  */
	protected $fillable = ['name'];

	public function user() {

		//		return $this->belongsTo('App\User');
		return $this->hasMany('App\Faster');
	}

}
