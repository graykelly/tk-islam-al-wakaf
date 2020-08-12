<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('kelas_m');
    }

    public function index()
    {
        $data['title'] = 'Halaman Kelas | TK ISLAM AL-WAKAF';
        $data['row'] = $this->kelas_m->get();
        $this->template->load('template', 'admin/kelas/kelas_data', $data);
    }

    public function add()
    {
        $kelas = new stdClass();
        $kelas->kelas_id = null;
        $kelas->kelas = null;

        $data = array(
            'title' => 'Tambah Data Kelas | TK ISLAM AL-WAKAF',
            'page' => 'add',
            'row' => $kelas
        );
        $this->template->load('template', 'admin/kelas/kelas_form', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            $this->kelas_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->kelas_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
        }
        redirect('admin/kelas');
    }

    public function edit($id)
    {
        $query = $this->kelas_m->get($id);
        if ($query->num_rows() > 0) {
            $kelas = $query->row();
            $data = array(
                'title' => 'Edit Data Kelas | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $kelas
            );
            $this->template->load('template', 'admin/kelas/kelas_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/kelas') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $this->kelas_m->del($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            echo "<script> 
                alert('Data Kelas tidak dapat dihapus (sudah berelasi dengan data Guru/Siswa)!');
            </script>";
        } else {
            echo "<script> 
                alert('Data berhasil dihapus!');
            </script>";
        }
        echo "<script> 
                window.location='" . site_url('admin/kelas') . "';
            </script>";
    }



}