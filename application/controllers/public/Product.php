<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Public_Controller {

    public function index()
    {
        $data['produk'] = $this->Product_model->get_all();
        $this->template->load('public', 'default', 'product/index', $data);
    }
}