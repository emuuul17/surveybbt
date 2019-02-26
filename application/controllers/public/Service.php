<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Public_Controller {

    public function index()
    {
        $data['service'] = $this->Service_model->get_all();
        $this->template->load('public', 'default', 'service/index', $data);
    }
}