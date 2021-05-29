<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{
    
    public function daftar($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    
    public function login($data)
    {
        $pendaftar = $this->db->get_where('pendaftar', ['email' => $data['email']])->row_array();

        if ($pendaftar) {
            if (password_verify($data['password'], $pendaftar['password'])) {
                $data = [
                    'email' => $pendaftar['email'],
                    'nama'  => $pendaftar['nama']
                ];
                $this->session->set_userdata($data);
                return redirect();
            } else {
                echo "PASSWORD GAK COCOK!";
                return;
            }
        } else {
            echo "DATA GAADA";
            return;
        }
    }
}
