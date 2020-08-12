<?php 

class Template_depan
{
    var $template_depan_data = array();

    function set($name, $value)
    {
        $this->template_depan_data[$name] = $value;
    }

    function load($template_depan = '', $view = '', $view_data = array(), $return = false)
    {
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, true));
        return $this->CI->load->view($template_depan, $this->template_depan_data, $return);
    }
}