<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();
        check_admin();

        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Users | TK ISLAM AL-WAKAF';
        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'admin/user/user_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah Data User | TK ISLAM AL-WAKAF';

        $this->form_validation->set_rules('fullname', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[5]|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|is_unique[user.email]');
        $this->form_validation->set_rules('level', 'Level', 'required');


        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'admin/user/user_form_add', $data);
        } else {
            $post = $this->input->post(null, true);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
            }
            redirect('admin/user');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Data User | TK ISLAM AL-WAKAF';

        $this->form_validation->set_rules('fullname', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[passconf]');
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|min_length[5]|matches[password]');
        }
        $this->form_validation->set_rules('level', 'Level', 'required');


        if ($this->form_validation->run() == false) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'admin/user/user_form_edit', $data);
            } else {
                echo "<script> 
                    alert('Data tidak ditemukan!');
                </script>";
                echo "<script> 
                    window.location='" . site_url('admin/user') . "';
                </script>";
            }

        } else {
            $post = $this->input->post(null, true);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
            }
            redirect('admin/user');
        }
    }

    function username_check()
    {
        $post = $this->input->post(null, true);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai. silahkan ganti!');
            return false;
        } else {
            return true;
        }
    }

    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/user');
    }


}
