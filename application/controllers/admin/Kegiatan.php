<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
		$data =array(
			'title'			=>'Halaman Kegiatan Admin',
			'isi'			=>'admin/kegiatan/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Kegiatan.php */
