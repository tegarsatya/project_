<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index()
	{
		$data =array(
			'title'			=> 'Halman Pendaftaran admin',
			'isi'			=> 'admin/pendaftaran/list'
		);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Pendaftaran.php */
