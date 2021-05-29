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

	public function add_anggota()
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

	public function add_tugas()
	{	
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
			$this->load->view('admin/tmplts/header_admin');
			$this->load->view('admin/tambah_tugas');
			$this->load->view('admin/tmplts/footer_admin');
        } else {
            $upload_file = $_FILES['file'];

            if ($upload_file) {
                $config['allowed_types'] = 'mp4|mkv|mov|pdf|txt|doc|ppt|psd';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/tugas';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $file = $this->upload->data('file_name');
                } else {                    
                    $this->session->set_flashdata('error','<div style="color:red;" >The filetype you are attempting to upload is not allowed.</div>');
                    redirect(base_url('admin/add_tugas'));
                }
            }
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),                
				'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'file' => $file,
                'divisi' => htmlspecialchars($this->input->post('divisi', true)),
            ];

            $this->db->insert('tugas', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('admin/add_tugas'));
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

	public function data_webdev(){
		$data = [
			'users' => $this->anggota->data_webdev(),
		];

		$this->load->view('admin/tmplts/header_admin');
		$this->load->view('admin/data_webdev', $data);
		$this->load->view('admin/tmplts/footer_admin');
	}

	public function data_robotics(){	
		$data = [
			'users' => $this->anggota->data_robotics(),
		];
		$this->load->view('admin/tmplts/header_admin');
		$this->load->view('admin/data_robotics', $data);
		$this->load->view('admin/tmplts/footer_admin');
	}

	public function data_programmers(){
		$data = [
			'users' => $this->anggota->data_programmers(),
		];
		$this->load->view('admin/tmplts/header_admin');
		$this->load->view('admin/data_programmers', $data);
		$this->load->view('admin/tmplts/footer_admin');
	}
	
}
