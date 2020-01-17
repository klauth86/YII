<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchQuery extends Model
{
	protected $table = 't_orm_search_query';
	
	public $timestamps = false;
	
	public $incrementing = false;
	
	public function account()
    {
        return $this->belongsTo('App\Account', 'facebook_login');
    }
	
	public function selfPosition()
    {
        return $this->belongsTo('App\Account', 'self_position_id');
    }
	
	public function searchPosition()
    {
        return $this->belongsTo('App\Account', 'search_position_id');
    }
}
