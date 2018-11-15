<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		// load template
		$this->template->load('admin', 'default', 'pages/index');
	}

	public function add()
	{
		// load template
		$this->template->load('admin', 'default', 'pages/add');
	}

	public function edit()
	{
		// load template
		$this->template->load('admin', 'default', 'pages/edit');
	}

	public function delete()
	{
		
	}
}