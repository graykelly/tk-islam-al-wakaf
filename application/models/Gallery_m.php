<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('gallery.*');
        $this->db->from('gallery');
        if ($id != null) {
            $this->db->where('gallery_id', $id);
        }

        $this->db->order_by('gallery_id', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul' => $post['judul'],
            'foto' => $post['foto']
        ];

        $this->db->insert('gallery', $params);
    }

    public function edit($post)
    {
        $params = [
            'judul' => $post['judul']

        ];
        if ($post['foto'] != null) {
            $params['foto'] = $post['foto'];
        }

        $this->db->where('gallery_id', $post['id']);
        $this->db->update('gallery', $params);
    }

    public function del($id)
    {
        $this->db->where('gallery_id', $id);
        $this->db->delete('gallery');
    }

    //front-end
    function gallery()
    {
        $query = $this->db->query("SELECT * FROM gallery");
        return $query;
    }
    function gallery_perpage($offset, $limit)
    {
        $query = $this->db->query("SELECT * FROM gallery limit $offset,$limit");
        return $query;
    }

}