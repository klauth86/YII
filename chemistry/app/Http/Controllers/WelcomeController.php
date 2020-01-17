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
	
	function step0_GetFacebookAccount()
	{
		$login = 'qwe@yandex.ru';
		$name = 'name';
		$patr = 'patr';
		$surname = 'surname';
		
		$account = Account::updateOrCreate(
		['facebook_login' => 'login'],
		['name' => $name, 'patronymic' => $patr, 'surname' => $surname]
		);
		
		if ($account->accountRefs()->count() > 0)
		{
			return view('main.index')->with('login', $login);				
		}
		else
		{
			$events = Event::where('is_active', 1)->get();	
			$positions = Position::where('is_active', 1)->get();			
			return view('registration.step2')->with('login', $login)->with('events', $events)->with('positions', $positions);
		}
	}
	
	function step1()
	{
		return view('welcome.index');
	}
	
	function Step2
	
}
