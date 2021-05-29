<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
    }

    public function login()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');

        if ($this->form_validation->run() == FALSE) {
            redirect();
        } else {
        $data = [
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password')
        ];
        $this->auth->login($data);
        }
    }
    
    public function daftar()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $data['title'] = 'Daftar RODA';
        $this->load->view('templates/header', $data);

        $this->form_validation->set_rules('nama', 'full name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[pendaftar.email]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[4]|matches[retype_password]');
        $this->form_validation->set_rules('retype_password', 'retype password', 'required|trim|matches[password]');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/daftar');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'nama' => $nama,
                'email' => $email,
                'password' => $pass
            ];
            $insert = $this->auth->daftar("pendaftar", $data);
            if($insert){
                $_SESSION['status'] = "Registered Succesfully";
                header('Location: ' . base_url());
            }
        }
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        redirect();
    }
} 