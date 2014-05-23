<?php

class Entry extends Eloquent {
	public function entryable() {
		return $this->morphTo();
	}	
}