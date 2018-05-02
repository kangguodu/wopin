<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HelpController extends Controller{

	public function index(Request $request){
		
		return view('help');
	}

	public function details(Request $request){
		$id = $request->get('id');

		return view('faq',['id'=>$id]);
	}
}