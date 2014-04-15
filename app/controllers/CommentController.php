<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() 
	{
		// Include parent constructor
		parent::__construct();

		// Run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['create']]);
		$this->beforeFilter('admin', ['only' => ['edit', 'destroy']]);
	}

	public function index()
	{
		//
		$comments = Comment::orderBy('created_at', 'desc')->paginate(5);
		return View::make('comments.index')->with('comments', $comments);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('comments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), Comment::$rules);

		if($validator->fails()) {
			Session::flash('errorMessage', 'Post not created - please fix form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
			// failed
		} else {

			$comment = new Comment();
			$comment->name = Input::get('name');
			$comment->body = Input::get('body');
			$comment->save();
			Session::flash('successMessage', 'Comment created successfully.');
			return Redirect::action('HomeController@showWelcome');
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
		//
		$comment = Comment::findOrFail($id);
		return View::make('comments.show')->with('comment', $comment);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Future edit functionality
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
		$comment = Comment::findOrFail($id);
		$validator = Validator::make(Input::all(), Comment::$rules);

		if($validator->fails()) {

			Session::flash('errorMessage', 'Post not edited - please fix form errors.');
			return Redirect::back()->withInput()->withErrors($validator);
			// failed
		} else {

			$comment->name = Input::get('name');
			$comment->body = Input::get('body');

			$comment->save();
			Session::flash('successMessage', 'Comment edited successfully.');
			return Redirect::action('CommentController@show', $id);
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
		$comment = Comment::findOrFail($id);
		$comment->delete();

		return Redirect::action('CommentController@index');
	}

}