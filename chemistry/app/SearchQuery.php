<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchQuery extends Model
{
	protected $table = 't_orm_search_query';
	
	public $timestamps = false;
	
	public $incrementing = false;
}
