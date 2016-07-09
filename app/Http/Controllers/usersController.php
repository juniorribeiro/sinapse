<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\User;

use Illuminate\Http\Request;

class usersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return void
	 */
	public function index() {
		$users = User::paginate(15);
		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return void
	 */
	public function create() {
		return view('fasters.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return void
	 */
	public function store(Request $request) {

		User::create($request->all());

		//		Session::flash('flash_message', 'Faster added!');

		return redirect('/');
	}

	/*	public function store(Request $request) {
	//		$this->validate($request, [
	//				'name' => 'required|max:255',
	//			]);

	$request->create([
	'name' => $request->name,
	]);

	return redirect('fasters');
	}
	 */
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 *
	 * @return void
	 */
	public function show($id) {
		$regex = Faster::findOrFail($id);

		return view('fasters.show', compact('regex'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 *
	 * @return void
	 */
	public function edit($id) {
		$regex = Faster::findOrFail($id);

		return view('fasters.edit', compact('regex'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 *
	 * @return void
	 */
	public function update($id, Request $request) {

		$regex = Faster::findOrFail($id);
		$regex->update($request->all());

		Session::flash('flash_message', 'Faster updated!');

		return redirect('fasters');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 *
	 * @return void
	 */
	public function destroy() {
		User::truncate();

		return redirect('/admin');
	}

	public function admin() {
		$user = User::first();
		return view('users.admin', compact("users"));

	}

}
