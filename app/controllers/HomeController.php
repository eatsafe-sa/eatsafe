<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

<<<<<<< HEAD
	public function showMap()
	{
		return View::make('map');

	}

		public function showLogin()
	{
		return View::make('login');

=======
	public function showLogin()
	{
		return View::make('login');
>>>>>>> 12dffcdc4d33cf378766340266b4272866a9cdb4
	}

	public function doLogin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
<<<<<<< HEAD
		    return Redirect::intended('/posts');
		}
		else
		{
	    // login failed, go back to the login screen
			return Redirect::back()->withInput();
		}

	}

	public function Logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');

=======
		    return Redirect::intended('/blog');
		}
		else
		{
		    // login failed, go back to the login screen
		    return Redirect::back()->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
>>>>>>> 12dffcdc4d33cf378766340266b4272866a9cdb4
	}

}