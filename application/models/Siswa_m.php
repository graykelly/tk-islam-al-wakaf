<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('siswa.*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.kelas_id = siswa.kelas_id');
        if ($id != null) {
            $this->db->where('siswa_id', $id);
        }

        $this->db->order_by('siswa_id', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nis' => $post['nis'],
            'nama' => $post['nama'],
            'jk' => $post['jk'],
            'tmp_tgl_lahir' => $post['tmp_tgl_lahir'],
            'alamat' => $post['alamat'],
            'kelas_id' => $post['kelas'],
            'foto' => $post['foto']
        ];

        $this->db->insert('siswa', $params);
    }

    public function edit($post)
    {
        $params = [
            'nis' => $post['nis'],
            'nama' => $post['nama'],
            'jk' => $post['jk'],
            'tmp_tgl_lahir' => $post['tmp_tgl_lahir'],
            'alamat' => $post['alamat'],
            'kelas_id' => $post['kelas'],
            'updated' => date('Y-m-d H:i:s')
        ];
        if ($post['foto'] != null) {
            $params['foto'] = $post['foto'];
        }

        $this->db->where('siswa_id', $post['id']);
        $this->db->update('siswa', $params);
    }

    public function del($id)
    {
        $this->db->where('siswa_id', $id);
        $this->db->delete('siswa');
    }

    //front-end
    function siswa()
    {
        $query = $this->db->query("SELECT * FROM siswa");
        return $query;
    }
    function siswa_perpage($offset, $limit)
    {
        $query = $this->db->query("SELECT * FROM siswa limit $offset,$limit");
        return $query;
    }


}