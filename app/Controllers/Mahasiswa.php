<?php namespace App\Controllers;

class Mahasiswa extends BaseController {
	
	public function index() {
		$data = [
            'style'     => $this->styleScript->style(),
            'script'    => $this->styleScript->script(),
            'title'     => "Halaman Depan Mahasiswa",
            'template'  => "mahasiswa/select"
		];
		return view('layouts/content/main', $data);
	}

}