<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = ['email', 'password', 'confirmation', 'confirmed'];

	public static $rules = [
		'email' => 'required|email|unique:users', 
		'password' => 'required'
	];

	// Set password mutator
	public function setPasswordAttribute($value) 
	{
		$this->attributes['password'] = Hash::make($value);
	}

    public function entries() 
    {
        return $this->morphMany('Entry', 'entryable');
    }

	// Relationship
	// hasMany method argument MOET met capital
	public function contests()
	{
		return $this->hasMany('Contest');
	}

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }
}