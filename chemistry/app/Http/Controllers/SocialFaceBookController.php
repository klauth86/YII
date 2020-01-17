<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;
use App\Account;
use App\SearchQuery;
use App\Event;
use App\Position;

class SocialFaceBookController extends Controller
{
	public function redirectToProvider()
	{
		return $this->createOrUpdate('1@1.ru', '1', '2', '3');
		//return Socialite::driver('facebook')->redirect();
	}

	public function handleProviderCallback()
	{
		$driver = Socialite::driver('facebook')->fields(['first_name', 'middle_name', 'last_name', 'email']);
		return $this->createOrUpdate($user->user['email'], $user->user['first_name'], $user->user['middle_name'], $user->user['last_name']);
	}
	
	public function createOrUpdate($email, $fname, $mname, $lname)
	{
		$account = Account::updateOrCreate(
			['facebook_login' => $email],
			['name' => $fname, 'patronymic' => $mname, 'surname' => $lname]
		);

		if ($account->accountRefs()->count() > 0)
		{
			return view('main.index');				
		}
		else
		{		
			$events = Event::where('is_active', 1)->get()->toArray();
			$eventsKvps = array_column($events, 'description', 'id');
			
			$positions = Position::where('is_active', 1)->get()->toArray();
			$positionsKvps = array_column($positions, 'description', 'id');
			
			return view('welcome.step1')->with('events', $eventsKvps)->with('positions', $positionsKvps);
		}
	}
}
