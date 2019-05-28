<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
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
		$data['jadwal'] = $this->db->count_all('schedule');
		$data['pendaftar'] = $this->db->count_all('register');
		$data['produk'] = $this->db->count_all('product');
		$data['servis'] = $this->db->count_all('service');
		$data['foto'] = $this->db->count_all('about_foto');
		$data['partner'] = $this->db->count_all('customer');

		// load template
		$this->template->load('admin', 'default', 'dashboard', $data);
		
	}
}