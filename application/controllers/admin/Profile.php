<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('profile_m');

    }

    public function index()
    {
        $data['title'] = 'Halaman Profile | TK ISLAM AL-WAKAF';
        $data['row'] = $this->profile_m->get();
        $this->template->load('template', 'admin/profile/profile_data', $data);
    }
    
    // public function add()
    // {
    //     $profile = new stdClass();
    //     $profile->profile_id = null;
    //     $profile->profile = null;
    //     $profile->visi = null;
    //     $profile->misi = null;

    //     $data = array(
    //         'page' => 'add',
    //         'row' => $profile
    //     );
    //     $this->template->load('template', 'admin/profile/profile_form', $data);
    // }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            $this->profile_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->profile_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
        }
        redirect('admin/profile');
    }

    public function edit($id)
    {
        $query = $this->profile_m->get($id);
        if ($query->num_rows() > 0) {
            $profile = $query->row();
            $data = array(
                'title' => 'Edit Data Profile | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $profile
            );
            $this->template->load('template', 'admin/profile/profile_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/profile') . "';
        </script>";
        }
    }

    // public function del($id)
    // {
    //     $this->profile_m->del($id);
    //     if ($this->db->affected_rows() > 0) {
    //         echo "<script> 
    //             alert('Data berhasil dihapus!');
    //         </script>";
    //     }
    //     echo "<script> 
    //             window.location='" . site_url('admin/profile') . "';
    //         </script>";
    // }


}