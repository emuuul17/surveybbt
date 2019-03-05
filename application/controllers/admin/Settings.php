<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller {
    function __construct(){
        parent::__construct();

      }

    public function index()
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $id = 1;

      $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('address', 'Alamat', 'trim|required|min_length[5]');
      $this->form_validation->set_rules('phone', 'No Telepon', 'trim|required|min_length[5]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('fax', 'Fax', 'trim');
      $this->form_validation->set_rules('facebook', 'Facebook', 'trim');
      $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
      $this->form_validation->set_rules('instagram', 'Instagram', 'trim');
      $this->form_validation->set_rules('linkedin', 'Linkedin', 'trim');

      if($this->form_validation->run() == FALSE){
        $data['settings'] = $this->Settings_model->get($id);
        $data['title'] = " Footer";
  
        $this->template->load('admin', 'default', 'settings/index', $data);
      }else{

        $data = array(
          'title' => $this->input->post('title'),
          'address' => $this->input->post('address'),
          'phone' => $this->input->post('phone'),
          'email' => $this->input->post('email'),
          'fax' => $this->input->post('fax'),
          'facebook' => $this->input->post('facebook'),
          'twitter' => $this->input->post('twitter'),
          'instagram' => $this->input->post('instagram'),
          'linkedin' => $this->input->post('linkedin')
        );

        $this->Settings_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/settings');
      }
    }

    public function add()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('no_tlp', 'No Telepon', 'trim|required|min_length[8]|integer');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'contact/add');
  
      }else{
        $name = $this->input->post('nama');
        $name = ucwords($name);

        $data = array(
          'nama' => $name,
          'no_tlp' => $this->input->post('no_tlp')
        );

        $this->Contact_model->add($data);
        $this->session->set_flashdata('success', 'Contact baru Ditambahkan!');

        redirect('admin/contact/index');
      }
    }

    public function edit($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('no_tlp', 'No Telepon', 'trim|required|min_length[8]|integer');

      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Contact_model->get($id);
  
        // load template
        $this->template->load('admin', 'default', 'contact/edit', $data);
      }else{
    
        $name = $this->input->post('nama');
        $name = ucwords($name);

        $data = array(
          'nama' => $name,
          'no_tlp' => $this->input->post('no_tlp')
        );

        $this->Contact_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/contact/index');
      }
    }

    public function delete($id)
    {
      $name = $this->Contact_model->get($id)->nama;

      // Delete subject
      $this->Contact_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/contact/index');
    }
}