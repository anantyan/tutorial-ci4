<?php namespace App\Controllers;

// from CI4
use CodeIgniter\Controller;
use CodeIgniter\Model;

// from custom
use \App\Libraries\StyleScript;
use \App\Models\Mahasiswa;

class BaseController extends Controller {

	// from CI4
	protected $db;
	protected $parser;

	// from custom
	protected $styleScript;
	protected $modelMahasiswa;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
		parent::initController($request, $response, $logger);

		// from CI4
		$this->db = new Model();

		// from custom
		$this->styleScript = new StyleScript();
		$this->modelMahasiswa = new Mahasiswa();
	}
}
