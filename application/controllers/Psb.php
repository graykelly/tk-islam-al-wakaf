<?php
class Psb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('psb_m');
    }

    function index()
    {
        $data['title'] = 'Info Pendaftaran Siswa Baru | TK ISLAM AL-WAKAF';
        $data['row'] = $this->psb_m->get();
        $this->template->load('template_depan', 'depan/psb', $data);
    }


}
