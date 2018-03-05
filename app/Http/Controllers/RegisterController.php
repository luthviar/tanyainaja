<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;

use Cookie;

class RegisterController extends Controller
{
    public function index() {
		$value = Cookie::get('UserCookie'); 
			
		$user = json_decode($value, true);
		$name = $user['data']['name'];
		
		return view("auth.register")->with('name', $name);
	
	}

	
}
