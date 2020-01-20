<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		return $this->commonMainLogic();
	}
	
	public function settings()
	{
		return  $this->commonMainSettings();
	}
	
	public function about()
	{
		return view('main.about');
	}
}
