<?php

class Comment extends Eloquent {

	protected $table = 'comments';


	// Define relationship to user (author)
	

	public static $rules = array(
	    'name' => 'required|max:100',
	    'body' => 'required|max:10000'
	);

	
}