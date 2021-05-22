<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Model
{
  public function all_data()
  {
    return $this->db->get('anggota')->result_array();
  }

  public function get_data($id)
  {
    return $this->db->get_where('anggota', ['id' => $id])->row_array();
  }

  public function delete_data($id)
  {
    $this->db->delete('anggota', ['id' => $id]);
    return redirect('admin/index');
  }
  
  public function insert_data($data)
  {
    $this->db->insert('anggota', $data);
    return redirect('admin/index');
  }

  public function edit_data($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('anggota', $data);
    return redirect('admin/index');
  }

  public function get_count()
  {
	$sql = "SELECT count(devisi) as devisi FROM anggota";
	$result = $this->db->query($sql);
	return $result->row()->devisi;
  }

  public function count_webdev()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->like('devisi', 'webdev');
    return $num_rows = $this->db->count_all_results();
  }

  public function count_robotics()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->like('devisi', 'robotics');
    return $num_rows = $this->db->count_all_results();
  }

  public function count_programmer()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->like('devisi', 'programmer');
    return $num_rows = $this->db->count_all_results();
  }

  
}