<?php
class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('contact_m');
    }
    function index()
    {

        $data['title'] = 'Hubungi Kami | TK ISLAM AL-WAKAF';
        $this->template->load('template_depan', 'depan/contact', $data);
    }

    function kirim_pesan()
    {
        $nama = htmlspecialchars($this->input->post('nama', true), ENT_QUOTES);
        $email = htmlspecialchars($this->input->post('email', true), ENT_QUOTES);
        $no_telp = htmlspecialchars($this->input->post('no_telp', true), ENT_QUOTES);
        $pesan = htmlspecialchars($this->input->post('pesan', true), ENT_QUOTES);
        $this->contact_m->kirim_pesan($nama, $email, $no_telp, $pesan);
        echo "<script>
                    alert('Terima Kasih Telah Menghubungi Kami!');
                    window.location='" . site_url('contact') . "';
                </script>";
    }
}
