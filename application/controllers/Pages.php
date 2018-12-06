<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller {

	public function index()
	{
		$data['featured_pages'] = $this->Page_model->get_featured();
		$this->template->load('public', 'default', 'pages/index', $data);
	}

	public function show($slug){
		$data['page'] = $this->Page_model->get_by_slug($slug);
		$this->template->load('public', 'default', 'pages/show', $data);
	}
}