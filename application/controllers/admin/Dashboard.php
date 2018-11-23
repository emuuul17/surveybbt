<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// get activity
		$data['activities'] = $this->Activity_model->get_list();

		// load template
		$this->template->load('admin', 'default', 'dashboard', $data);
		
	}
}