<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends Public_Controller {

    public function index()
    {
        $data['team'] = $this->Team_model->get_tim();
        $this->template->load('public', 'default', 'team/index', $data);
    }
}