<?php namespace App\Controllers;

class Main extends BaseController {
	
	public function home() {
		$data = [
			'message' => "Hello world!"
		];
		return view('layouts/content/home', $data);
	}

}