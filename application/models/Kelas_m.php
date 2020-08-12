<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('kelas');
        if ($id != null) {
            $this->db->where('kelas_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'kelas' => $post['kelas']
        ];

        $this->db->insert('kelas', $params);
    }

    public function edit($post)
    {
        $params = [
            'kelas' => $post['kelas']
        ];

        $this->db->where('kelas_id', $post['id']);
        $this->db->update('kelas', $params);
    }

    public function del($id)
    {
        $this->db->where('kelas_id', $id);
        $this->db->delete('kelas');
    }


}