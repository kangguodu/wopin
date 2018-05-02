<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZhaoshangController extends Controller
{

	public function index(Request $request){

		return view('zhaoshang');
	}


}


?>