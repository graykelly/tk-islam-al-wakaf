<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('guru.*');
        $this->db->from('guru');
        $this->db->join('kelas', 'kelas.kelas_id = guru.kelas_id');
        if ($id != null) {
            $this->db->where('guru_id', $id);
        }

        $this->db->order_by('guru_id', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nip' => $post['nip'],
            'nama' => $post['nama'],
            'jk' => $post['jk'],
            'tmp_tgl_lahir' => $post['tmp_tgl_lahir'],
            'alamat' => $post['alamat'],
            'no_telp' => $post['no_telp'],
            'email' => $post['email'],
            'kelas_id' => $post['kelas'],
            'foto' => $post['foto']
        ];

        $this->db->insert('guru', $params);
    }

    public function edit($post)
    {
        $params = [
            'nip' => $post['nip'],
            'nama' => $post['nama'],
            'jk' => $post['jk'],
            'tmp_tgl_lahir' => $post['tmp_tgl_lahir'],
            'alamat' => $post['alamat'],
            'no_telp' => $post['no_telp'],
            'email' => $post['email'],
            'kelas_id' => $post['kelas'],
            'updated' => date('Y-m-d H:i:s')
        ];
        if ($post['foto'] != null) {
            $params['foto'] = $post['foto'];
        }

        $this->db->where('guru_id', $post['id']);
        $this->db->update('guru', $params);
    }

    public function del($id)
    {
        $this->db->where('guru_id', $id);
        $this->db->delete('guru');
    }

    //front-end
    function guru()
    {
        $query = $this->db->query("SELECT * FROM guru");
        return $query;
    }
    function guru_perpage($offset, $limit)
    {
        $query = $this->db->query("SELECT * FROM guru limit $offset,$limit");
        return $query;
    }
}
