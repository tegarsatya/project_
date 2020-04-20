<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function index()
	{
		$data =array(
			'title'		=> 'Halaman Struktur Organisasi Admin',
			'isi'		=> 'admin/kegiatan/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Struktur.php */
