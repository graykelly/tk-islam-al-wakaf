<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('inbox.*');
        $this->db->from('inbox');
        if ($id != null) {
            $this->db->where('inbox_id', $id);
        }

        $this->db->order_by('inbox_id', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function kirim_pesan($nama, $email, $no_telp, $pesan)
    {
        $query = $this->db->query("INSERT INTO inbox(nama,email,no_telp,pesan) VALUES ('$nama','$email','$no_telp','$pesan')");
        return $query;
    }

    public function update_inbox_status()
    {
        $query = $this->db->query("UPDATE inbox SET inbox_status='0'");
        return $query;
    }

    public function del($id)
    {
        $this->db->where('inbox_id', $id);
        $this->db->delete('inbox');
    }


}