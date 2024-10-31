<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_jurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where('jurusan', ['id' => $id])->row();
    }

    public function create_jurusan($data)
    {
        $this->db->insert('jurusan', $data);
    }

    public function get_jurusan($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('jurusan');
        return $query->row_array();
    }

    public function update_jurusan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('jurusan', $data);
    }

    public function delete_jurusan($id)
    {
        $this->db->delete('jurusan', ['id' => $id]);
    }
    public function count_all()
    {
        return $this->db->count_all('jurusan');
    }
}
