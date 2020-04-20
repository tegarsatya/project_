<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redaksi extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'			=> 'Halaman Redaksi Admin',
			'isi'			=> 'admin/redaksi/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Redaksi php */
