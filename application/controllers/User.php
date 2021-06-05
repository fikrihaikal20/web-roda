<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

	public function index()
	{
		$this->load->view('user/index');
        $this->load->view('templates/footer');

	}
}
