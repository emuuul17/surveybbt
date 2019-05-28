<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Schedule extends Public_Controller
{

    public function index()
    {
        $data['jadwal'] = $this->Schedule_model->get_all();
        $this->template->load('public', 'default', 'schedule/index', $data);
    }
    public function getMonth()
    {
        $data['jadwal'] = $this->Schedule_model->get_jadwal($_POST['bulan']);
        $this->template->load('public', 'default', 'schedule/index', $data);
    }
}
