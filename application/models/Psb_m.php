<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psb_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('psb');
        if ($id != null) {
            $this->db->where('psb_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function add($post)
    // {
    //     $params = [
    //         'keterangan' => $post['keterangan'],
    //         'persyaratan' => $post['persyaratan'],
    //         'tanggal' => $post['tanggal'],
    //         'gambar' => $post['gambar']
    //     ];

    //     $this->db->insert('psb', $params);
    // }

    public function edit($post)
    {
        $params = [
            'keterangan' => $post['keterangan'],
            'persyaratan' => $post['persyaratan'],
            'tanggal' => $post['tanggal'],
        ];
        if ($post['gambar'] != null) {
            $params['gambar'] = $post['gambar'];
        }

        $this->db->where('psb_id', $post['id']);
        $this->db->update('psb', $params);
    }

    // public function del($id)
    // {
    //     $this->db->where('psb_id', $id);
    //     $this->db->delete('psb');
    // }


}