<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends Admin_Controller {
	function __construct(){
		parent::__construct();

		// check login
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}
	}

	public function index()
	{
		$data['subjects'] = $this->Subject_model->get_list();
		// load template
		$this->template->load('admin', 'default', 'subjects/index', $data);
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

	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		if ($this->form_validation->run() === FALSE) {
			// get current subject
			$data['item'] = $this->Subject_model->get($id);
			// load template
		$this->template->load('admin', 'default', 'subjects/edit', $data);
		}else{
			$old_name = $this->Subject_model->get($id)->name;
			$new_name = $this->input->post('name');

			// create post array
			$data = array(
				'name' => $this->input->post('name')
			);
		

		//  Insert subject
		$this->Subject_model->update($id, $data);

		// Activity array
		$data = array(
			'resource_id' => $this->db->insert_id(),
			'type' => 'subject',
			'action' => 'updated',
			'user_id' => 1,
			'message' => 'A subject ('.$old_name.') was renamed To ('.$new_name.')'
		);

		//  Insert activity
		$this->Activity_model->add($data);
		
		
		// set msg
		$this->session->set_flashdata('success', 'Subject has been updated');

		// redirect
		redirect('admin/subjects');
		}
	}

	public function delete($id)
	{
		$name = $this->Subject_model->get($id)->name;

		// Delete subject
		$this->Subject_model->delete($id);
		
		// Activity array
		$data = array(
			'resource_id' => $this->db->insert_id(),
			'type' => 'subject',
			'action' => 'deleted',
			'user_id' => 1,
			'message' => 'Subject has been deleted'
		);

		//  Insert activity
		$this->Activity_model->add($data);
		
		
		// set msg
		$this->session->set_flashdata('success', 'Subject has been deleted');

		// redirect
		redirect('admin/subjects');
	}
}