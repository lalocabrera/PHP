<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function() {
	if(Auth::check()) {
		return Redirect::to('/home');
	}	
	return View::make('landing');
});

Route::post('/login', function() {
	$email = Input::get('email');
	$password = Input::get('password');

	if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		#TODO redirect to home if email and password authenticates
		return Redirect::to('/home');	
	} else {
		#TODO Flash error back
		Session::flash('login', 'email or password invalid/missing');
		return Redirect::to('/');	
	}
});

Route::post('/register', function() {
	$email = Input::get('email');
	$full_name = Input::get('full_name');
	$password = Input::get('password');
	
	if (empty($email) || empty($full_name) || empty($password)) {
		Session::flash('register', 'email, fullname, or password invalid/missing');
		return Redirect::to('/');		
	}

	# check if the user already exists.
	$user = User::where('email', '=', $email)->first();
	if ($user === null) {
		$user = new User;
		$user->email = $email;
		$user->full_name = $full_name;
		$user->password = Hash::make($password);
		$user->save();
		return Redirect::to('/home');
	} else {
		# user with this eail is already registered
		Session::flash('register', "$email is already registered");
			return Redirect::to('/');
	}
});

Route::get('/home', function() {
	if(Auth::check()) {
		$full_name = Auth::user()->full_name;
		$messages = Message::all();
		return View::make('home', array("first_name" => $full_name, "messages" => $messages));
	}

	return Redirect::to('/');	

});

Route::post('/message', function() {
	if(Auth::check()) {
		$body = Input::get('body');
		$message = new Message;
		$message->body = $body;
		$message->user_id = Auth::id();
	}
	return Redirect::to('/');
});

Route::post('/message/delete/{id}', function($id) {
	if(Auth::check()) {
		$message = Message::find($id);
		if($message) {
			$message->delete();
		}
	}
	return Redirect::to('/');
});
