<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Home extends Public_Controller {

	public function index()
	{
		//data yg di ambil dari databse di tampung dalam satu variable $data, kemudian akan di tampilakn di file antawijaya
        $data['tentang'] = $this->Home_model->get_data_about();
        $data['owner'] = $this->Home_model->get_data_owner();
		$this->template->load('public', 'default', 'home/index', $data);
		}
	}
