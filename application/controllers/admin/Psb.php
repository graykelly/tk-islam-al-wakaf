<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('psb_m');

    }

    public function index()
    {
        $data['title'] = 'Halaman Info Pendaftaran Siswa Baru | TK ISLAM AL-WAKAF';
        $data['row'] = $this->psb_m->get();
        $this->template->load('template', 'admin/psb/psb_data', $data);
    }

    // public function add()
    // {
    //     $psb = new stdClass();
    //     $psb->psb_id = null;
    //     $psb->keterangan = null;
    //     $psb->persyaratan = null;
    //     $psb->tanggal = null;
    //     $psb->gambar = null;

    //     $data = array(
    //         'page' => 'add',
    //         'row' => $psb
    //     );
    //     $this->template->load('template', 'admin/psb/psb_form', $data);
    // }

    public function process()
    {
        $config['upload_path'] = './assets/images/psb/';
        $config['allowed_types'] = 'jpg|gif|png|jpeg';
        $config['max_size'] = 2048;
        $config['file_name'] = 'psb-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            if (@$_FILES['gambar']['name'] != null) {
                if ($this->upload->do_upload('gambar')) {
                    $post['gambar'] = $this->upload->data('file_name');
                    $this->item_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/psb');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/psb/add');
                }

            } else {
                $post['gambar'] = null;
                $this->psb_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/psb');

            }
        } else if (isset($_POST['edit'])) {
            if (@$_FILES['gambar']['name'] != null) {
                if ($this->upload->do_upload('gambar')) {

                    $psb = $this->psb_m->get($post['id'])->row();
                    if ($psb->gambar != null) {
                        $target_file = './assets/images/psb/' . $psb->gambar;
                        unlink($target_file);
                    }

                    $post['gambar'] = $this->upload->data('file_name');
                    $this->psb_m->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                    }
                    redirect('admin/psb');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>$error</div>");
                    redirect('admin/psb/add');
                }

            } else {
                $post['gambar'] = null;
                $this->psb_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
                }
                redirect('admin/psb');
            }
        }
    }

    public function edit($id)
    {
        $query = $this->psb_m->get($id);
        if ($query->num_rows() > 0) {
            $psb = $query->row();
            $data = array(
                'title' => 'Edit Data Info Pendaftaran Siswa Baru | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $psb
            );
            $this->template->load('template', 'admin/psb/psb_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/psb') . "';
        </script>";
        }
    }

    // public function del($id)
    // {
    //     $this->psb_m->del($id);
    //     if ($this->db->affected_rows() > 0) {
    //         echo "<script> 
    //             alert('Data berhasil dihapus!');
    //         </script>";
    //     }
    //     echo "<script> 
    //             window.location='" . site_url('admin/psb') . "';
    //         </script>";
    // }


}