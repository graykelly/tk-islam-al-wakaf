<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }

    function PdfGenerator($html, $filename, $paper, $orientation)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientation);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($filename, array('Attachment' => 0));
    }

    public function count_gallery()
    {
        $this->ci->load->model('gallery_m');
        return $this->ci->gallery_m->get()->num_rows();
    }

    public function count_guru()
    {
        $this->ci->load->model('guru_m');
        return $this->ci->guru_m->get()->num_rows();
    }

    public function count_siswa()
    {
        $this->ci->load->model('siswa_m');
        return $this->ci->siswa_m->get()->num_rows();
    }

    public function count_user()
    {
        $this->ci->load->model('user_m');
        return $this->ci->user_m->get()->num_rows();
    }
}
