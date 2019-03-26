<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Public_Controller {

    public function index()
    {
        $data['customer'] = $this->Customer_model->get_customer();
        $this->template->load('public', 'default', 'customer/index', $data);
    }
}