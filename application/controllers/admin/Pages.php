<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct(){
		parent::__construct();

		// check login
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}
	}

	public function index()
	{
		$data['pages'] = $this->Page_model->get_list();
		// load template
		$this->template->load('admin', 'default', 'pages/index', $data);
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
				'message' => 'A new page was added ('.$data['title'].')'
			);

			//  Insert activity
			$this->Activity_model->add($data);
			
			// set msg
			$this->session->set_flashdata('success', 'Page has been added');

			// redirect
			redirect('admin/pages');
		}
	}

	public function edit($id)
	{
		// field rules
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('subject_id', 'Subject', 'trim|required');
		$this->form_validation->set_rules('body', 'Body', 'trim|required');
		$this->form_validation->set_rules('is_published', 'Publish', 'required');
		$this->form_validation->set_rules('is_featured', 'Feature', 'required');
		$this->form_validation->set_rules('order', 'Order', 'integer');

		if($this->form_validation->run() == FALSE){
			$data['item'] = $this->Page_model->get($id);

			$subject_options = array();
			$subject_options[0] = 'Select Subject';

			$subject_list = $this->Subject_model->get_list();

			foreach($this->Subject_model->get_list() as $subject){
				$subject_options[$subject->id] = $subject->name;
			}

			$data['subject_options'] = $subject_options;

			// load template
			$this->template->load('admin', 'default', 'pages/edit', $data);
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

			$this->Page_model->update($id, $data);

			// Activity array
			$data = array(
				'resource_id' => $this->db->insert_id(),
				'type' => 'page',
				'action' => 'updated',
				'user_id' => 1,
				'message' => 'A page was edited ('.$data['title'].')'
			);

			//  Insert activity
			$this->Activity_model->add($data);
			
			// set msg
			$this->session->set_flashdata('success', 'Page has been updated');

			// redirect
			redirect('admin/pages');
		}

	}

	public function delete($id)
	{
		$title = $this->Page_model->get($id)->title;

		// Delete page
		$this->Page_model->delete($id);
		
		// Activity array
		$data = array(
			'resource_id' => $this->db->insert_id(),
			'type' => 'page',
			'action' => 'deleted',
			'user_id' => 1,
			'message' => 'Page has been deleted'
		);

		//  Insert activity
		$this->Activity_model->add($data);
		
		
		// set msg
		$this->session->set_flashdata('success', 'Page has been deleted');

		// redirect
		redirect('admin/pages');
	}
}