<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('agenda_m');
    }
    function index()
    {
        $data['title'] = 'Selamat Datang di Website TK ISLAM AL-WAKAF';
        $data['row'] = $this->agenda_m->agenda_home();
        $data['tot_guru'] = $this->db->get('guru')->num_rows();
        $data['tot_siswa'] = $this->db->get('siswa')->num_rows();
        $data['tot_gallery'] = $this->db->get('gallery')->num_rows();
        $data['tot_agenda'] = $this->db->get('agenda')->num_rows();
        $this->template->load('template_depan', 'depan/home', $data);
    }
}
