<?php 

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('userid');
    if ($user_session) {
        redirect('admin/dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('userid');
    if (!$user_session) {
        redirect('admin/auth/login');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->level != 1) {
        redirect('admin/dashboard');
    }
}

function indo_currency($nominal)
{
    $result = "Rp " . number_format($nominal, 0, '.', '.');
    return $result;
}

function indo_date($date)
{
    $d = substr($date, 8, 2);
    $m = substr($date, 5, 2);
    $y = substr($date, 0, 4);
    return $d . '-' . $m . '-' . $y;
}



