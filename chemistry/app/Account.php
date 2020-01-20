<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected $table = 't_orm_account';
	
	public $timestamps = false;
	
	public $incrementing = false;

	protected $fillable = ['facebook_login', 'name', 'patronymic', 'surname', 'description'];	
}
