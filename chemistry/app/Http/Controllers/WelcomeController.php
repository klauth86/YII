<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Event;
use App\Position;
use App\SearchQuery;

class WelcomeController extends Controller
{
	function index()
	{
		return view('welcome.index');
	}
	
	function step1()
	{
		return view('welcome.step1');
	}

	function step2(Request $request)
	{
		return view('welcome.step2');
	}

	function step3(Request $request)
	{
		return view('main.index');
	}		
}
