<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Target extends Public_Controller {

    public function index()
    {
        $data['sasaran'] = $this->Target_model->get_sasaran();
        $this->template->load('public', 'default', 'target/index', $data);
    }

    public function show($id)
    {
        $data['item'] = $this->Target_model->get($id);
        $this->template->load('public', 'default', 'target/page', $data);
    }
}