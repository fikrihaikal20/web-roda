<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('m_tugas');
        $this->list_tugas['robotics'] = $this->m_tugas->robotics()->result();
        $this->list_tugas['webdev'] = $this->m_tugas->webdev()->result();
        $this->list_tugas['programmers'] = $this->m_tugas->programmers()->result();     
    }

    function generatetugas($tugas){
    
        $data['tugas'] = $this->list_tugas[$tugas];        
        $this->load->view('tugas/template_users/header_users');
        $this->load->view('tugas/tugas_'. $tugas, $data);
        $this->load->view('templates/footer');
    }

    public function detail_tugas($id)
    {
        $where = array('id' => $id);
        $detail = $this->m_tugas->belajar($id);
        $data['detail'] = $detail;        
        $this->load->view('tugas/belajar', $data);
        $this->load->view('templates/footer');
    }

    public function robotics()
    {
        $this->generatetugas('robotics');
    }
    
    public function webdev()
    {
        $this->generatetugas('webdev');
    }

    public function programmers()
    {
        $this->generatetugas('programmers');
    }

}
