<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'			=> 'Halaman Video Admin',
			'isi'			=> 'admin/video/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Video.php */
