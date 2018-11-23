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
		// field rules
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('subject_id', 'Subject', 'trim|required');
		$this->form_validation->set_rules('body', 'Body', 'trim|required');
		$this->form_validation->set_rules('is_published', 'Publish', 'required');
		$this->form_validation->set_rules('is_featured', 'Feature', 'required');
		$this->form_validation->set_rules('order', 'Order', 'integer');

		if($this->form_validation->run() == FALSE){
			$subject_options = array();
			$subject_options[0] = 'Select Subject';

			$subject_list = $this->Subject_model->get_list();

			foreach($subject_list as $subject){
				$subject_options[$subject->id] = $subject->name;
			}

			$data['subject_options'] = $subject_options;

			// load template
			$this->template->load('admin', 'default', 'pages/add', $data);

		}else{
			$slug = str_replace(' ', '-', $this->input->post('title'));
			$slug = strtolower($slug);

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'subject_id' => $this->input->post('subject_id'),
				'body' => $this->input->post('body'),
				'is_published' => $this->input->post('is_published'),
				'is_featured' => $this->input->post('is_featured'),
				'in_menu' => $this->input->post('in_menu'),
				'user_id' => 1,
				'order' => $this->input->post('order')
			);

			$this->Page_model->add($data);

			// Activity array
			$data = array(
				'resource_id' => $this->db->insert_id(),
				'type' => 'page',
				'action' => 'added',
				'user_id' => 1,
				'message' => 'A new subject was added ('.$data['title'].')'
			);

			//  Insert activity
			$this->Activity_model->add($data);
			
			// set msg
			$this->session->set_flashdata('success', 'Page has been added');

			// redirect
			redirect('admin/pages');

		}
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