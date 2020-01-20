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
use App\AccountRef;
use App\Account;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	// Login
	
	public function HasSessionData($key = 'id')
	{
		return Session::has($key);
	}
	
	public function GetSessionData($key = 'id')
	{
		return Session::get($key);
	}
	
	public function SetSessionData($value, $key = 'id')
	{
		Session::put($key, $value);
	}
	
	public function ClearSessionData($key = 'id')
	{
		Session::forget($key);
	}	
	
	public function commonStep1Logic()
	{
		if ($this->HasSessionData())
		{
			$squeries = SearchQuery::where('facebook_login', $this->GetSessionData())->get();
			
			if ($squeries->isEmpty())
			{		
				$events = Event::where('is_active', 1)->get()->toArray();
				$eventsKvps = array_column($events, 'description', 'id');
				
				$positions = Position::where('is_active', 1)->get()->toArray();
				$positionsKvps = array_column($positions, 'description', 'id');
				
				return view('welcome.step1')->with('events', $eventsKvps)->with('positions', $positionsKvps);	
			}			
			return $this->commonStep2Logic();
		}		
		return view('welcome.index');
	}
	
	public function commonStep2Logic()
	{
		if ($this->HasSessionData())
		{
			$refs = AccountRef::where('facebook_login', $this->GetSessionData())->get();
			
			if ($refs->isEmpty())
			{
				return view('welcome.step2');
			}
			return $this->commonMainLogic();
		}		
		return view('welcome.index');
	}
	
	public function IsTelegram($reference)
	{
		return false;
	}
	
	public function commonMainLogic()
	{
		$accounts = Account::with('accountRefs')->get();
		$acc = $accounts[1];
		$accRefs = $acc->accountRefs()->get();
		
		foreach	($acc->accountRefs as $cat)
		{
			echo $cat;
		}
		
		$accrefs2 = AccountRef::where('facebook_login', $acc->facebook_login)->get();
		
		echo $acc->facebook_login;
		echo $accRefs;
		echo $accrefs2;
		
		return view('main.index')->with('accounts', $accounts);
	}
}
