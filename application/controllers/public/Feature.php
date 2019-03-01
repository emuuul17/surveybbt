<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends Public_Controller {

    public function index()
    {
        $data['service'] = $this->Service_model->get_all();
        $data['product'] = $this->Product_model->get_all();
        $this->template->load('public', 'default', 'feature/index', $data);
    }
    
}