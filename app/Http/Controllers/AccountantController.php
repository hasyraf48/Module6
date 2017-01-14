<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accountant;

class AccountantController extends Controller
{
    //view data
	public function index() {
		$accountant = Accountant::all();
		return view('index2', compact('accountant'));
	}

	//insert data
	public function insert(Request $request) {
		//validate data

		//insert db
		Accountant::create($request->all());
	}

	//update data
	public function update(Request $request, $id) {
		$accountant = Accountant::findOrFail($id);
		$accountant->update($request->all());
	}

	//delete data
	public function delete(Request $request, $id) {
		$accountant = Accountant::findOrFail($id);
		$accountant->delete($request->all());
	}
}
