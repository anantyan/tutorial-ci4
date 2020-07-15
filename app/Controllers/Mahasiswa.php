<?php namespace App\Controllers;

class Mahasiswa extends BaseController {
	
	public function index() {
		$data = [
            'style'     => $this->styleScript->style(),
            'script'    => $this->styleScript->script(),
            'title'     => "Halaman Depan Mahasiswa",
			'template'  => "mahasiswa/select",
			'records'	=> $this->modelMahasiswa->select('tbl_mahasiswa', null)
		];
		return view('layouts/content/main', $data);
	}

	public function get($id='') {
		$data = [
			'style'		=> $this->styleScript->style(),
			'script'	=> $this->styleScript->script(),
			'title'		=> "Halaman Detail Mahasiswa",
			'template'	=> "mahasiswa/detail",
			'records'	=> $this->modelMahasiswa->select('tbl_mahasiswa', [
				'id'		=> $this->db->escapeString($id)
			])
		];
		return view('layouts/content/main', $data);
	}
}