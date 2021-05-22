<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
    	parent::__construct();
   		$this->load->model('anggota');
    }

	public function index()
	{
		$data = [
			'users' => $this->anggota->all_data(),
			'count_anggota' => $this->anggota->get_count(),
			'count_webdev' => $this->anggota->count_webdev(),
			'count_robotics' => $this->anggota->count_robotics(),
			'count_programmer' => $this->anggota->count_programmer()
		];

		$this->load->view('admin/index', $data);
	}

	public function detail($id)
    {
		$data = [
		'title' => 'Detail Anggota',
		'user'  => $this->anggota->get_data($id),
		];

		$this->load->view('admin/tmplts/header_admin', $data);
		$this->load->view('admin/detail_anggota', $data);
		$this->load->view('admin/tmplts/footer_admin');
    }

	public function delete($id)
  	{
    	$this->anggota->delete_data($id);
  	}

	public function tambah()
	{
		$data['title'] = 'Tambah Anggota';
	
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('devisi', 'Devisi', 'required|trim');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
	
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/tmplts/header_admin', $data);
			$this->load->view('admin/tambah_anggota');
			$this->load->view('admin/tmplts/footer_admin');
		} else {
		  $data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'devisi' => $this->input->post('devisi'),
			'kelas' => $this->input->post('kelas')
		  ];
		  $this->anggota->insert_data($data);
		}
	}

	public function edit($id)
	{
		$data = [
		'title' => 'Edit Data',
		'user'  => $this->anggota->get_data($id)
		];

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('devisi', 'devisi', 'required|trim');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/tmplts/header_admin', $data);
			$this->load->view('admin/edit_anggota', $data);
			$this->load->view('admin/tmplts/footer_admin');
		} else {
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'devisi' => $this->input->post('devisi'),
			'kelas' => $this->input->post('kelas')

		];
		$this->anggota->edit_data($data, $id);
		}
	}

	public function login(){
		$this->load->view('admin/login');
	}

	
}
