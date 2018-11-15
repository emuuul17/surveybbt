<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		// load template
		$this->template->load('admin', 'default', 'users/index');
	}

	public function add()
	{
		// load template
		$this->template->load('admin', 'default', 'users/add');
	}

	public function edit()
	{
		// load template
		$this->template->load('admin', 'default', 'users/edit');
	}

	public function delete()
	{
		
	}

	public function login()
	{
		
	}

	public function logout()
	{
		
	}
}