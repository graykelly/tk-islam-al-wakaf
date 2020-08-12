<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        check_not_login();

        $this->load->model('agenda_m');
    }

    public function index()
    {
        $data['title'] = 'Halaman Agenda | TK ISLAM AL-WAKAF';
        $data['row'] = $this->agenda_m->get();
        $this->template->load('template', 'admin/agenda/agenda_data', $data);
    }

    public function add()
    {
        $agenda = new stdClass();
        $agenda->agenda_id = null;
        $agenda->agenda = null;
        $agenda->deskripsi = null;
        $agenda->tgl_mulai = null;
        $agenda->tgl_selesai = null;
        $agenda->tempat = null;
        $agenda->waktu = null;
        $agenda->keterangan = null;

        $data = array(
            'title' => 'Tambah Data Agenda | TK ISLAM AL-WAKAF',
            'page' => 'add',
            'row' => $agenda
        );
        $this->template->load('template', 'admin/agenda/agenda_form', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['add'])) {
            $this->agenda_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->agenda_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil disimpan!</div>');
        }
        redirect('admin/agenda');
    }

    public function edit($id)
    {
        $query = $this->agenda_m->get($id);
        if ($query->num_rows() > 0) {
            $agenda = $query->row();
            $data = array(
                'title' => 'Edit Data Agenda | TK ISLAM AL-WAKAF',
                'page' => 'edit',
                'row' => $agenda
            );
            $this->template->load('template', 'admin/agenda/agenda_form', $data);
        } else {
            echo "<script> 
            alert('Data tidak ditemukan!');
        </script>";
            echo "<script> 
            window.location='" . site_url('admin/agenda') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $this->agenda_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Data berhasil dihapus!</div>');
        }
        redirect('admin/agenda');
    }



}