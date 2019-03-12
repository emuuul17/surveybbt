<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends Public_Controller {

    public function index()
    {
        $data['jadwal'] = $this->Schedule_model->get_jadwal();
        $this->template->load('public', 'default', 'schedule/index', $data);
    }
}