<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SearchQuery;
use App\Event;
use App\Position;

class WelcomeController extends Controller
{
	function index()
	{
		return view('welcome.index');
	}
	
	function step1()
	{
		return $this->commonStep1Logic();
	}

	function step2(Request $request)
	{
		if ($this->HasSessionData())
		{
			$squery = new SearchQuery;
			$squery->facebook_login = $this->GetSessionData();
			$squery->self_position_id = $request->post('self_position');
			$squery->search_position_id = $request->post('search_position');
			$squery->description = $request->post('description');
			$squery->save();
			return view('welcome.step2');
		}		
		return view('welcome.index');
	}

	function step3(Request $request)
	{
		return $this->ResultBySessionData(view('main.index'));
	}		
}
