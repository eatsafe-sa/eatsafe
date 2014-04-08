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

	public function setNameAttribute($value)
	{
		$this->attributes['name'] = strtolower($value);
	}

	public function getNameAttribute()
	{
		return ucfirst($this->attributes['name']);
	}

	public function setAddressAttribute($value)
	{
		$this->attributes['address'] = strtolower($value);
	}

	public function getAddressAttribute()
	{
		return ucfirst($this->attributes['address']);
	}
}