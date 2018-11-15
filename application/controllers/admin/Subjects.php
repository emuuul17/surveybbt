<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

	public function index()
	{
		// load template
		$this->template->load('admin', 'default', 'subjects/index');
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		if ($this->form_validation->run() === FALSE) {
			// load template
		$this->template->load('admin', 'default', 'subjects/add');
		}else{
			// create post array
			$data = array(
				'name' => $this->input->post('name')
			);
		

		//  Insert subject
		$this->Subject_model->add($data);

		// Activity array
		$data = array(
			'resource_id' => $this->db->insert_id(),
			'type' => 'subject',
			'action' => 'added',
			'user_id' => 1,
			'message' => 'A new subject was added ('.$data['name'].')'
		);

		//  Insert activity
		$this->Activity_model->add($data);
		
		// set msg
		$this->session->set_flashdata('success', 'Subject has been added');

		// redirect
		redirect('admin/subjects');
		}
	}

	public function edit()
	{
		// load template
		$this->template->load('admin', 'default', 'subjects/edit');
	}

	public function delete()
	{
		
	}
}