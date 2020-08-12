<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jumlah_siswa_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('jumlah_siswa.*');
        $this->db->from('jumlah_siswa');
        if ($id != null) {
            $this->db->where('jumlah_siswa_id', $id);
        }

        $this->db->order_by('jumlah_siswa_id', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'tahun_ajaran' => $post['tahun_ajaran'],
            'siswa_laki_laki' => $post['siswa_laki_laki'],
            'siswa_perempuan' => $post['siswa_perempuan'],
            'jumlah_siswa' => $post['jumlah_siswa']
        ];

        $this->db->insert('jumlah_siswa', $params);
    }

    public function edit($post)
    {
        $params = [
            'tahun_ajaran' => $post['tahun_ajaran'],
            'siswa_laki_laki' => $post['siswa_laki_laki'],
            'siswa_perempuan' => $post['siswa_perempuan'],
            'jumlah_siswa' => $post['jumlah_siswa']
        ];

        $this->db->where('jumlah_siswa_id', $post['id']);
        $this->db->update('jumlah_siswa', $params);
    }

    public function del($id)
    {
        $this->db->where('jumlah_siswa_id', $id);
        $this->db->delete('jumlah_siswa');
    }


}