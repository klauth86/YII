<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\SearchQuery;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// if authorised and get all data
		
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
			return view('registration.step1')->with('login', $login);
		}			
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
