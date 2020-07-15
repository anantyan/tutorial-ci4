<?php namespace App\Libraries;

class BaseLibrary {

    // from CI4
    protected $uri;

    public function initLibrary() {
		parent::initLibrary();

		// from CI4
		$this->uri = \Config\Services::uri();
	}
}