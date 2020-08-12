<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_already_login();
        $this->load->view('admin/login');
    }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script>
                    alert('Selamat, Login berhasil!');
                    window.location='" . site_url('admin/dashboard') . "';
                </script>";

            } else {
                echo "<script>
                    alert('Login gagal! Masukan Username dan Password dengan benar!');
                    window.location='" . site_url('admin/auth/login') . "';
                </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('userid', 'level');
        $this->session->unset_userdata($params);
        redirect('admin/auth/login');
    }
}
