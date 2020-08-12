<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('profile');
        if ($id != null) {
            $this->db->where('profile_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function add($post)
    // {
    //     $params = [
    //         'profile' => $post['profile'],
    //         'visi' => $post['visi'],
    //         'misi' => $post['misi'],
    //     ];

    //     $this->db->insert('profile', $params);
    // }

    public function edit($post)
    {
        $params = [
            'profile' => $post['profile'],
            'visi' => $post['visi'],
            'misi' => $post['misi'],
        ];

        $this->db->where('profile_id', $post['id']);
        $this->db->update('profile', $params);
    }

    // public function del($id)
    // {
    //     $this->db->where('profile_id', $id);
    //     $this->db->delete('profile');
    // }


}