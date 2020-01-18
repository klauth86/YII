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
		return $this->createOrUpdate('1@2.ru', '1', '2', '3');
		//return Socialite::driver('facebook')->redirect();
	}

	public function handleProviderCallback()
	{
		$driver = Socialite::driver('facebook')->fields(['first_name', 'middle_name', 'last_name', 'email']);
		
		// handle not registered case
		// return error view
		
		// otherwise go further		
		return $this->createOrUpdate($user->user['email'], $user->user['first_name'], $user->user['middle_name'], $user->user['last_name']);
	}
	
	public function createOrUpdate($email, $fname, $mname, $lname)
	{
		$account = Account::updateOrCreate(
			['facebook_login' => $email],
			['name' => $fname, 'patronymic' => $mname, 'surname' => $lname]
		);
		
		$this->SetSessionData($email);

		return $this->commonStep1Logic();
	}
}
