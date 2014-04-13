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
	    'address' => 'required|max:200',
	    'zip' => 'required|min:5'
	);

	public function setNameAttribute($value)
	{
		$this->attributes['name'] = ucwords($value);
	}

	public function getNameAttribute()
	{
		return ucwords($this->attributes['name']);
	}

	public function setAddressAttribute($value)
	{
		$this->attributes['address'] = ucwords($value);
	}

	public function getAddressAttribute()
	{
		return ucwords($this->attributes['address']);
	}
}