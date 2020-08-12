<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model(['guru_m', 'kelas_m']);

    }

    public function index()
    {
        $data['title'] = 'Halaman Guru | TK ISLAM AL-WAKAF';
        $data['row'] = $this->guru_m->get();
        $this->template->load('template', 'admin/guru/guru_data', $data);
    }

    public function add()
    {
        $guru = new stdClass();
        $guru->guru_id = null;
        $guru->nip = null;
        $guru->nama = null;
        $guru->jk = null;
        $guru->tmp_tgl_lahir = null;
        $guru->alamat = null;
        $guru->no_telp = null;
        $guru->email = null;
        $guru->kelas_id = null;

        $query_kelas = $this->kelas_m->get();

        $data = array(
            'title' => 'Tambah Data Guru | TK ISLAM AL-WAKAF',
            'page' => 'add',
            'row' => $guru,
            'kelas' => $query_kelas,
        );
        $this->template->load('template', 'admin/guru/guru_form', $data);
    }

    public function process()
    {
        $config['upload_path'] = './assets/images/guru/';
        $config['allowed_types'] = 'jpg|gif|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'guru-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {
                    $post['foto'] = $this->upload->data('file_name');
                    $this->guru_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/guru');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/guru/add');
                }

            } else {
                $post['foto'] = null;
                $this->guru_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/guru');

            }
        } else if (isset($_POST['edit'])) {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {

                    $guru = $this->guru_m->get($post['id'])->row();
                    if ($guru->foto != null) {
                        $target_file = './assets/images/guru/' . $guru->foto;
                        unlink($target_file);
                    }

                    $post['foto'] = $this->upload->data('file_name');
                    $this->guru_m->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/guru');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/guru/add');
                }

            } else {
                $post['foto'] = null;
                $this->guru_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/guru');
            }
        }
    }

    public function edit($id)
    {
        $query = $this->guru_m->get($id);
        if ($query->num_rows() > 0) {
            $guru = $query->row();
            $query_kelas = $this->kelas_m->get();


            $data = array(
                'title' => 'Edit Data Guru | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $guru,
                'kelas' => $query_kelas,
            );
            $this->template->load('template', 'admin/guru/guru_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/guru') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $guru = $this->guru_m->get($id)->row();
        if ($guru->foto != null) {
            $target_file = './assets/images/guru/' . $guru->foto;
            unlink($target_file);
        }

        $this->guru_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/guru');
    }


}