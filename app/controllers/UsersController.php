<?php

class UsersController extends \BaseController {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->user->all();

		return View::make('users.index')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, User::$rules);

		if ($validation->fails()) 
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		// Assign the confirmation to a random generate hashstring and assign owner to logged in user
		$input['confirmation'] = str_random();

		$this->user->create($input);

		$user = ['email' => $input['email']];

		$data = [
			'username' => $input['email'],
			'confirmation' => $input['confirmation']
		];

		// Queue zorgt ervoor dat de email wordt verzonden op de achtergrond en de gebruiker niet hoeft te wachten op het verzenden van
		// de email maar meteen wordt doorgezonden.
		Mail::queue('emails.welcome', $data, function($message) use ($user)
		{
			$message->to($user['email'])
					->subject('Welkom bij microlancer.nl!');
		});

		return Redirect::route('users.show', $input['email']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($email)
	{
		//Get the email instead of the id
		$user = $this->user->where('email', '=', $email)->first();

		return View::make('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($email)
	{
		return View::make('users.edit')->with('email', $email);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($email)
	{
		$input = Input::all();

		$user = $this->user->where('email', '=', $email)->first();
		
		$user->update($input);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->find($id)->delete();

		return Redirect::route('users.index');
	}

	public function login() {
		return View::make('users.login');
	}

	public function logincheck() {
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(['email' => $email, 'password' => $password]))
		{
		    return Redirect::to('/');
		} else {
			return Redirect::back()->withInput()->withErrors('failed to login');
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::back();
	}

}