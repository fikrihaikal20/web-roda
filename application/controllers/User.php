<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('email')) {
      redirect();
    }
  }

	public function index()
	{
		$this->load->view('user/index');
        $this->load->view('templates/footer');

	}
}
