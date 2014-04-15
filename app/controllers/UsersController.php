<?php

class UsersController extends \BaseController {

	public function __construct() 
	{
		// Include parent constructor
		parent::__construct();

		// Run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show', 'create']]);
		$this->beforeFilter('admin', ['only' => ['edit', 'destroy']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		if(Input::has('search')) {
			$search = Input::get('search');
			$users = User::where('first_name', 'LIKE', "%{$search}%")
							->orWhere('last_name', 'LIKE', "%{$search}%")
							->orWhere('email', 'LIKE', "%${search}%")
							->orderBy('first_name', 'asc')
							->paginate(8);
			return View::make('users.index')->with('users', $users);
		} else {
			$users = User::orderBy('first_name', 'asc')->paginate(8);
			return View::make('users.index')->with('users', $users);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Save to DB
		//Log::info(Input::all());

		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'User not created - please fix form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
			// failed
		} else {

			$user = new User();
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			if(Input::get('is_admin') === true) {
				$user->is_admin = true;
			} else {
				$user->is_admin = false;
			}

			$user->save();
			Session::flash('successMessage', 'User created successfully.');
			return Redirect::action('UsersController@index');
		}
		//return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Show a post
		$user = User::findOrFail($id);
		return View::make('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$user = User::findOrFail($id);
		return View::make('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$user = User::findOrFail($id);
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()) {

			Session::flash('errorMessage', 'User not edited - please fix form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
			// failed
		} else {

			
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			if(Input::get('is_admin') === true) {
				$user->is_admin = true;
			} else {
				$user->is_admin = false;
			}

			$user->save();
			Session::flash('successMessage', 'User edited successfully.');
			return Redirect::action('UsersController@show', $id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$user = User::findOrFail($id);
		$user->delete();

		return Redirect::action('UsersController@index');
	}

}