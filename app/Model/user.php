<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model {
	//table name of db
	protected $table = 'users';

	// fields for insert to db
	protected $fillable = ['firstname', 'lasttname', 'email', 'tel', 'password'];
}
