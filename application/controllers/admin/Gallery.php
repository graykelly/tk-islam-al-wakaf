<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('gallery_m');
    }

    public function index()
    {
        $data['title'] = 'Halaman Gallery | TK ISLAM AL-WAKAF';
        $data['row'] = $this->gallery_m->get();
        $this->template->load('template', 'admin/gallery/gallery_data', $data);
    }

    public function add()
    {
        $gallery = new stdClass();
        $gallery->gallery_id = null;
        $gallery->judul = null;

        $data = array(
            'title' => 'Tambah Data Gallery | TK ISLAM AL-WAKAF',
            'page' => 'add',
            'row' => $gallery
        );
        $this->template->load('template', 'admin/gallery/gallery_form', $data);
    }

    public function process()
    {
        $config['upload_path'] = './assets/images/gallery/';
        $config['allowed_types'] = 'jpg|gif|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {
                    $post['foto'] = $this->upload->data('file_name');
                    $this->gallery_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/gallery');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/gallery/add');
                }

            } else {
                $post['foto'] = null;
                $this->gallery_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/gallery');

            }
        } else if (isset($_POST['edit'])) {
            if (@$_FILES['foto']['name'] != null) {
                if ($this->upload->do_upload('foto')) {

                    $gallery = $this->gallery_m->get($post['id'])->row();
                    if ($gallery->foto != null) {
                        $target_file = './assets/images/gallery/' . $gallery->foto;
                        unlink($target_file);
                    }

                    $post['foto'] = $this->upload->data('file_name');
                    $this->gallery_m->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/gallery');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/gallery/add');
                }

            } else {
                $post['foto'] = null;
                $this->gallery_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/gallery');
            }
        }
    }

    public function edit($id)
    {
        $query = $this->gallery_m->get($id);
        if ($query->num_rows() > 0) {
            $gallery = $query->row();

            $data = array(
                'title' => 'Edit Data Gallery | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $gallery

            );
            $this->template->load('template', 'admin/gallery/gallery_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/gallery') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $gallery = $this->gallery_m->get($id)->row();
        if ($gallery->foto != null) {
            $target_file = './assets/images/gallery/' . $gallery->foto;
            unlink($target_file);
        }

        $this->gallery_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/gallery');
    }



}