<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu {
    public function __construct(){
        $this->CI =& get_instance();
        $this->CI->config->item('base_url');
    }

    public function get_pages(){
        $pages = $this->CI->Page_model->get_menu_pages();
        return $pages;
    }
}