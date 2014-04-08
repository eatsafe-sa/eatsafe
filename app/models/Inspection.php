<?php

class Inspection extends Eloquent 
{

	protected $table = 'inspections';

	public function inspections() 
	{
		return $this->belongsTo('Restaurant');

	}

	public static $rules = array(
	    'demerits' => 'required',
	    'link' => 'required',
	    'date' => 'required'
	);
}