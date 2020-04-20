<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	// Index
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array(
			'title' => 'Manajemen User',
			'user'	=> 	$user,
			'isi'  	=> 'admin/user/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Tambah User
	public function tambah()
	{

		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'nama',
			'Nama',
			'required',
			array('required' => 'Nama harus diisi')
		);

		$valid->set_rules(
			'email',
			'Email',
			'required',
			array('required' => 'email harus diisi')
		);

		$valid->set_rules(
			'username',
			'Username',
			'required|is_unique[users.username]',
			array(
				'required' 	=> 'Username harus diisi',
				'is_unique'	=> 'Username: <strong>' . $this->input->post('username') .
					'</strong> sudah digunakan. Buat username baru!'
			)
		);

		$valid->set_rules(
			'password',
			'Password',
			'required',
			array('required' => 'Password harus diisi')
		);

		if ($valid->run() === FALSE) {
			// End validasi

			$data = array(
				'title' => 'Tambah User',
				'isi'  => 'admin/user/tambah'
			);
			$this->load->view('admin/layout/wrapper', $data);
			// masuk database
		} else {
			$i = $this->input;
			$data = array(
				'nama'			=> 	$i->post('nama'),
				'email'			=>	$i->post('email'),
				'username'		=>	$i->post('username'),
				'password'		=>	$i->post('password'),
				'akses_level'	=> $i->post('akses_level')
			);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'user telah ditambah');
			redirect(base_url('admin/user'));
		}
		// End masuk database
	}

	// Edit User
	public function edit($id_user)
	{
		$user 		= $this->user_model->detail($id_user);

		// Validasi
		$validasi = $this->form_validation;

		$validasi->set_rules(
			'nama',
			'Nama User',
			'required',
			array('required'		=> '%s harus diisi')
		);

		$validasi->set_rules(
			'username',
			'Username',
			'required',
			array('required'		=> '%s harus diisi')
		);

		$validasi->set_rules(
			'password',
			'Password',
			'required',
			array('required'		=> '%s harus diisi')
		);

		if ($validasi->run() === FALSE) {
			// End validasi

			$data = array(
				'title'		=> 'Edit User: ' . $user->nama,
				'user'		=> $user,
				'isi'		=> 'admin/user/edit'
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
			// Masuk ke database
		} else {
			$inp = $this->input;

			$data = array(
				'id_user'		=> $id_user,
				'id_bagian'		=> $inp->post('id_bagian'),
				'nama'		=> $inp->post('nama'),
				'email'			=> $inp->post('email'),
				'username'		=> $inp->post('username'),
				'password'		=> sha1($inp->post('password')),
				'akses_level'	=> $inp->post('akses_level'),
				'keterangan'	=> $inp->post('keterangan'),
				'tanggal_post'	=> date('Y-m-d H:i:s')
			);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diupdate');
			redirect(base_url('admin/user'), 'refresh');
		}
		// End masuk database
	}


	// Delete User
	public function delete($id_user)
	{
		$this->simple_login->cek_login();
		$data = array('id_user' => $id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'user telah dihapus');
		redirect(base_url('admin/user'));
	}

}

/* End of file User.php */
