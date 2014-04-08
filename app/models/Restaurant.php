<?php

class Restaurant extends Eloquent 
{

	protected $table = 'restaurants';

	public function restaurants() 
	{
		return $this->hasOne('Inspection');

	}

	public static $rules = array(
	    'name' => 'required|max:100',
	    'address' => 'required|max:100',
	    'zip' => 'required|min:5'
	);
}