<?php

namespace App\Http\Controllers;

use App\Faster;
use App\Http\Controllers\Controllers;

use Illuminate\Http\Request;

class fastersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return void
	 */
	public function index() {
		$fasters = Faster::paginate(15);

		return view('fasters.index', compact('fasters'));
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

		Faster::create($request->all());

		//Session::flash('flash_message', 'Faster added!');

		return redirect('fasters');
	}

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

		$faster = Faster::findOrFail($id);
		$faster->update($request->all());

		//Session::flash('flash_message', 'Faster updated!');

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
		Faster::truncate();

		return redirect('/admin');
	}

	public function admin() {
		$faster = Faster::first();
		return view('fasters.admin', compact("faster"));

	}

}
