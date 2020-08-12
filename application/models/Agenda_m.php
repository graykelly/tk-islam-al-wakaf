<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('agenda.*');
        $this->db->from('agenda');
        if ($id != null) {
            $this->db->where('agenda_id', $id);
        }

        $this->db->order_by('agenda_id', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'agenda' => $post['agenda'],
            'deskripsi' => $post['deskripsi'],
            'tgl_mulai' => $post['tgl_mulai'],
            'tgl_selesai' => $post['tgl_selesai'],
            'tempat' => $post['tempat'],
            'waktu' => $post['waktu'],
            'keterangan' => $post['keterangan']
        ];

        $this->db->insert('agenda', $params);
    }

    public function edit($post)
    {
        $params = [
            'agenda' => $post['agenda'],
            'deskripsi' => $post['deskripsi'],
            'tgl_mulai' => $post['tgl_mulai'],
            'tgl_selesai' => $post['tgl_selesai'],
            'tempat' => $post['tempat'],
            'waktu' => $post['waktu'],
            'keterangan' => $post['keterangan']
        ];

        $this->db->where('agenda_id', $post['id']);
        $this->db->update('agenda', $params);
    }

    public function del($id)
    {
        $this->db->where('agenda_id', $id);
        $this->db->delete('agenda');
    }

    //front-end
    function agenda_home()
    {
        $query = $this->db->query("SELECT * FROM agenda ORDER BY agenda_id DESC limit 3");
        return $query;
    }
    function agenda()
    {
        $query = $this->db->query("SELECT * FROM agenda ORDER BY agenda_id DESC");
        return $query;
    }
    function agenda_perpage($offset, $limit)
    {
        $query = $this->db->query("SELECT * FROM agenda ORDER BY agenda_id DESC limit $offset,$limit");
        return $query;
    }
}
