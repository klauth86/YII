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
}
