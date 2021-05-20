<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'RODA';
		$this->load->view('templates/header', $data);
		$this->load->view('home');
        $this->load->view('templates/footer');
	}
	
	public function tentang()
	{
		$data['title'] = 'Tentang RODA';
        $this->load->view('templates/header', $data);
		$this->load->view('tentang');
        $this->load->view('templates/footer');
	}
	
	public function kontak()
	{
		$data['title'] = 'Kontak RODA';
		$this->load->view('templates/header', $data);
		$this->load->view('kontak');
        $this->load->view('templates/footer');
	}
}
