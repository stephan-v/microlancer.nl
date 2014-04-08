<?php

class Contest extends Eloquent {

	protected $fillable = ['title', 'category', 'description', 'budget'];

	public function user()
	{
		return $this->belongsTo('User');
	}

}