<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

use App\SearchQuery;
use App\Event;
use App\Position;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	// Login
	
	public function HasSessionData()
	{
		return Session::has('id');
	}
	
	public function GetSessionData()
	{
		return Session::get('id');
	}
	
	public function SetSessionData($value)
	{
		Session::put('id', $value);
	}
	
	public function ClearSessionData()
	{
		Session::forget('id');
	}	
	
	function commonStep1Logic()
	{
		if ($this->HasSessionData())
		{
			$squeries = SearchQuery::where('facebook_login', $this->GetSessionData())->get();
			if (empty($squeries))
			{
				$events = Event::where('is_active', 1)->get()->toArray();
				$eventsKvps = array_column($events, 'description', 'id');
				
				$positions = Position::where('is_active', 1)->get()->toArray();
				$positionsKvps = array_column($positions, 'description', 'id');
				
				return view('welcome.step1')->with('events', $eventsKvps)->with('positions', $positionsKvps);	
			}
			
			return view('welcome.step2');
		}		
		return view('welcome.index');
	}
	
	
	
	
	
}
