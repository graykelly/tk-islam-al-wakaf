<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jumlah_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('jumlah_siswa_m');
    }

    public function index()
    {
        $data['title'] = 'Halaman Jumlah Siswa | TK ISLAM AL-WAKAF';
        $data['row'] = $this->jumlah_siswa_m->get();
        $this->template->load('template', 'admin/jumlah_siswa/jumlah_siswa_data', $data);
    }

    public function add()
    {
        $jumlah_siswa = new stdClass();
        $jumlah_siswa->jumlah_siswa_id = null;
        $jumlah_siswa->tahun_ajaran = null;
        $jumlah_siswa->siswa_laki_laki = null;
        $jumlah_siswa->siswa_perempuan = null;
        $jumlah_siswa->jumlah_siswa = null;

        $data = array(
            'title' => 'Tambah Data Jumlah Siswa | TK ISLAM AL-WAKAF',
            'page' => 'add',
            'row' => $jumlah_siswa
        );
        $this->template->load('template', 'admin/jumlah_siswa/jumlah_siswa_form', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            $this->jumlah_siswa_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->jumlah_siswa_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
        }
        redirect('admin/jumlah_siswa');
    }

    public function edit($id)
    {
        $query = $this->jumlah_siswa_m->get($id);
        if ($query->num_rows() > 0) {
            $jumlah_siswa = $query->row();
            $data = array(
                'title' => 'Edit Data Jumlah Siswa | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $jumlah_siswa
            );
            $this->template->load('template', 'admin/jumlah_siswa/jumlah_siswa_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/jumlah_siswa') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $this->jumlah_siswa_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/jumlah_siswa');
    }

    public function cetak()
    {
        $data['row'] = $this->jumlah_siswa_m->get();
        $html = $this->load->view('admin/jumlah_siswa/jumlah_siswa_print', $data, true);
        $this->fungsi->PdfGenerator($html, 'Data Jumlah Siswa TK ISLAM AL-WAKAF', 'A4', 'portrait');
    }



}