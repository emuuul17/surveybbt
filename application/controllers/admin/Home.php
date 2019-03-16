<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');

      }

    public function testimoni($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from home_testimoni ';
      $per_page = 10;
      $qry.= " order by id";
      $offset                    = ($this->uri->segment(4) != '' ? $this->uri->segment(4):0);
      $config['total_rows']      = $this->db->query($qry)->num_rows();
      $config['per_page']        = $per_page;
      $config['full_tag_open']   = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']  = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_link']      = 'First';
      $config['last_link']       = 'Last';
      $config['next_link']       = 'Next';
      $config['prev_link']       = 'Previous';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';
      $config['uri_segment']     = 4;
      $config['base_url']        = base_url().'admin/contact/index';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(4);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      
      $data['kontak'] = $this->Contact_model->get_all();
      $data['title'] = "Contact";

      $this->template->load('admin', 'default', 'contact/index', $data);
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
        //     var_dump($id);
        // die();
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