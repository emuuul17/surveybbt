<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {

    public function index()
    {
        $data['kontak'] = $this->Contact_model->get_all();
        $this->template->load('public', 'default', 'contact/index', $data);
    }
}