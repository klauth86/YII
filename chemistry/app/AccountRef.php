<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountRef extends Model
{
	protected $table = 't_orm_account_refs';
	
	public $timestamps = false;

	public $incrementing = false;
	
	protected $fillable = ['facebook_login', 'reference', 'is_telegram', 'is_active'];	
}
