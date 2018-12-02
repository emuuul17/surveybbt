<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
			parent::__construct();

			// check login
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
		}

	public function index()
	{
		// get activity
		$data['activities'] = $this->Activity_model->get_list();

		// load template
		$this->template->load('admin', 'default', 'dashboard', $data);
		
	}
}