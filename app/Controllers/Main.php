<?php namespace App\Controllers;

use \App\Libraries\StyleScript;

class Main extends BaseController {
	
	public function home() {
		$styleScript = new StyleScript();
		$data = [
            'style'     => $styleScript->style(),
            'script'    => $styleScript->script(),
			'title'		=> "Halaman Depan",
			'template'	=> "home"
		];
		return view('layouts/content/main', $data);
	}

}