<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}
	
	public function blocked()
	{
		return view('auth/blocked');
	}
}
