<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'			=> 'Halaman Galeri Admin',
			'isi'			=> 'admin/galeri/list'
		);
		$this->load->view('layout/wrapper', $data. FALSE);
	}

}

/* End of file Galeri.php */
