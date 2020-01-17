<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;
use App\Account;
use App\SearchQuery;

class SocialFaceBookController extends Controller
{
	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->redirect();
	}

	public function handleProviderCallback()
	{
		$driver = Socialite::driver('facebook')->fields(['first_name', 'middle_name', 'last_name', 'email']);

		$account = Account::updateOrCreate(
			['facebook_login' => $user->user['email']],
			['name' => $user->user['first_name'], 'patronymic' => $user->user['middle_name'], 'surname' => $user->user['last_name']]
		);

		if ($account->accountRefs()->count() > 0)
		{
			return view('main.index');				
		}
		else
		{
			$events = Event::where('is_active', 1)->get();	
			$positions = Position::where('is_active', 1)->get();			
			return view('registration.step2')->with('login', $login)->with('events', $events)->with('positions', $positions);
		}
	}
}
