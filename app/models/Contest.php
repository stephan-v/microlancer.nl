<?php

class Contest extends Eloquent {

	protected $fillable = ['title', 'category', 'description', 'budget', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function entries() 
	{
		return $this->morphMany('Entry', 'entryable');
	}

}