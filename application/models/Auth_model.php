<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{
    public function daftar($table, $data)
    {
    return $this->db->insert($table, $data);
    }
}
