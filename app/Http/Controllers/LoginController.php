<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;

use Cookie;

class LoginController extends Controller
{
    function index() {
	
		return view("auth.login");
	
	}

	public function login() {
		$client = new Client();
		$r = $client->request('POST', 'http://localhost/tanya_in_aja_back/public/api/login', [
				'form_params' => [
					'email' => Input::get('email'),
					'password' => Input::get('password'),
				],
			]);

		$body = $r->getBody();
		$user = json_decode($body, true);
		$tokens = $user['tokens'];
			
		
		if ($tokens != null) {
					
			$name = $user['data']['name'];
			
			return view('dashboard')->with('name', $name);
		}
		
		return redirect('login');

		// return $user;
		
	}



}
