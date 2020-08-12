<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data['title'] = 'Halaman Dashboard | TK ISLAM AL-WAKAF';
        $this->template->load('template', 'admin/dashboard', $data);
    }
}
