<?php
class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_m');
    }

    function index()
    {
        $data['title'] = 'Siswa Kami | TK ISLAM AL-WAKAF';
        $data['row'] = $this->siswa_m->get();
        $jum = $this->siswa_m->siswa();
        $page = $this->uri->segment(3);
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $limit = 8;
        $config['base_url'] = base_url() . 'siswa/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
						//Tambahan untuk styling
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';

        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $data['row'] = $this->siswa_m->siswa_perpage($offset, $limit);
        $this->template->load('template_depan', 'depan/siswa', $data);
    }


}
