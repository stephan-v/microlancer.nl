<?php

class EntriesController extends BaseController {

	protected $entry;

	public function __construct(Entry $entry) 
	{
		$this->entry = $entry;
	}

	public function index() 
	{
		return 'Hello entry';
	}

}