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


  
}