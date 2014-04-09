<?php

class ContestsController extends BaseController {

	protected $contest;

	public function __construct(Contest $contest)
	{
		$this->contest = $contest;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contests = $this->contest->all();
        return View::make('contests.index')->with('contests', $contests);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('contests.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		// Assign the contest to the currently logged in user
		$input['user_id'] = Auth::user()->id;

		$contest = $this->contest->create($input);

		return Redirect::route('contests.show', $contest->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contest = $this->contest->find($id);
        return View::make('contests.show')->with('contest', $contest);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contest = $this->contest->find($id);
        return View::make('contests.edit')->with('contest', $contest);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->contest->find($id)->delete();

		return Redirect::route('contests.index');
	}

}
