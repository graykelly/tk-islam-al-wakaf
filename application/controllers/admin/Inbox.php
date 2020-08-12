<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('contact_m');
    }

    public function index()
    {
        $this->contact_m->update_inbox_status();
        $data['title'] = 'Halaman Inbox | TK ISLAM AL-WAKAF';
        $data['row'] = $this->contact_m->get();
        $this->template->load('template', 'admin/inbox/inbox_data', $data);
    }

    public function del($id)
    {
        $this->contact_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/inbox');
    }



}