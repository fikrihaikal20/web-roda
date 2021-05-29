<?php

class M_tugas extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tugas');
    }

    public function belajar($id = null)
    {
        $query = $this->db->get_where('tugas', array('id' => $id))->row();
        return $query;
    } 

    public function delete_tugas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_tugas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function robotics()
    {
        $divisi = 'robotics';
        $this->db->where('divisi', $divisi);
        return $this->db->get('tugas');
    }

    public function webdev()
    {
        $divisi = 'webdev';                
        $this->db->where('divisi', $divisi);
        return $this->db->get('tugas');
    }

    public function programmers()
    {
        $divisi = 'programmers';                
        $this->db->where('divisi', $divisi);
        return $this->db->get('tugas');
    }

    
}
