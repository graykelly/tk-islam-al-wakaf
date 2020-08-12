<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model(['siswa_m', 'kelas_m']);

    }

    public function index()
    {
        $data['title'] = 'Halaman Siswa | TK ISLAM AL-WAKAF';
        $data['row'] = $this->siswa_m->get();
        $this->template->load('template', 'admin/siswa/siswa_data', $data);
    }

    public function add()
    {
        $siswa = new stdClass();
        $siswa->siswa_id = null;
        $siswa->nis = null;
        $siswa->nama = null;
        $siswa->jk = null;
        $siswa->tmp_tgl_lahir = null;
        $siswa->alamat = null;
        $siswa->kelas_id = null;

        $query_kelas = $this->kelas_m->get();

        $data = array(
            'title' => 'Tambah Data Siswa | TK ISLAM AL-WAKAF',
            'page' => 'add',
            'row' => $siswa,
            'kelas' => $query_kelas,
        );
        $this->template->load('template', 'admin/siswa/siswa_form', $data);
    }

    public function process()
    {
        $config['upload_path'] = './assets/images/siswa/';
        $config['allowed_types'] = 'jpg|gif|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'siswa-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {
                    $post['foto'] = $this->upload->data('file_name');
                    $this->siswa_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/siswa');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/siswa/add');
                }

            } else {
                $post['foto'] = null;
                $this->siswa_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/siswa');

            }
        } else if (isset($_POST['edit'])) {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {

                    $siswa = $this->siswa_m->get($post['id'])->row();
                    if ($siswa->foto != null) {
                        $target_file = './assets/images/siswa/' . $siswa->foto;
                        unlink($target_file);
                    }

                    $post['foto'] = $this->upload->data('file_name');
                    $this->siswa_m->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/siswa');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/siswa/add');
                }

            } else {
                $post['foto'] = null;
                $this->siswa_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/siswa');
            }
        }
    }

    public function edit($id)
    {
        $query = $this->siswa_m->get($id);
        if ($query->num_rows() > 0) {
            $siswa = $query->row();
            $query_kelas = $this->kelas_m->get();


            $data = array(
                'title' => 'Edit Data Siswa | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $siswa,
                'kelas' => $query_kelas,
            );
            $this->template->load('template', 'admin/siswa/siswa_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/siswa') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $siswa = $this->siswa_m->get($id)->row();
        if ($siswa->foto != null) {
            $target_file = './assets/images/siswa/' . $siswa->foto;
            unlink($target_file);
        }

        $this->siswa_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/siswa');
    }


}