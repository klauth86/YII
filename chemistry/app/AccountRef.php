<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountRef extends Model
{
	protected $table = 't_orm_account_refs';
	
	public $timestamps = false;

	public $incrementing = false;

	public function account()
    {
        return $this->belongsTo('App\Account', 'facebook_login');
    }
}
