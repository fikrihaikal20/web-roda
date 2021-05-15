<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
        $this->load->view('templates/footer');
	}

	public function tentang()
	{
        $this->load->view('templates/header');
		$this->load->view('tentang');
        $this->load->view('templates/footer');
	}

	public function kontak()
	{
		$this->load->view('templates/header');
		$this->load->view('kontak');
        $this->load->view('templates/footer');
	}

	public function daftar()
	{
        $this->load->view('templates/header');
		$this->load->view('daftar');
        $this->load->view('templates/footer');
	}
}
