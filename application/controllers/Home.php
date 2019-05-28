<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Public_Controller
{

	public function index()
	{
		//data yg di ambil dari databse di tampung dalam satu variable $data, kemudian akan di tampilakn di file antawijaya
		$data['tentang'] = $this->About_model->get_about();
		$data['owner'] = $this->Owner_model->get_data_owner();
		$data['testi'] = $this->Home_model->get_data_testi();
		$this->template->load('public', 'default', 'home/index', $data);
	}
}
