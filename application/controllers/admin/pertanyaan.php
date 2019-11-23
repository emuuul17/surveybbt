<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pertanyaan extends Admin_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
    }

    public function pengujian($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from pertanyaan_pengujian ';
      $per_page = 31;
      $qry.= " order by id";
      $offset                    = ($this->uri->segment(5) != '' ? $this->uri->segment(5):0);
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
      $config['uri_segment']     = 5;
      $config['base_url']        = base_url().'admin/pertanyaan/pengujian';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      $data['title'] = "Pertanyaan";

      $this->template->load('admin', 'default', 'pertanyaan/pengujian/index', $data);
    }

     public function rancang_bangun($offset = 0)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from pertanyaan_rancang ';
      $per_page = 31;
      $qry.= " order by id";
      $offset                    = ($this->uri->segment(5) != '' ? $this->uri->segment(5):0);
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
      $config['uri_segment']     = 5;
      $config['base_url']        = base_url().'admin/pertanyaan/rancang_bangun';

     $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      $data['title'] = "Pertanyaan";

      $this->template->load('admin', 'default', 'pertanyaan/rancang_bangun/index', $data);
    }

     public function pelatihan($offset = 0)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from pertanyaan_pelatihan ';
      $per_page = 31;
      $qry.= " order by id";
      $offset                    = ($this->uri->segment(5) != '' ? $this->uri->segment(5):0);
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
      $config['uri_segment']     = 5;
      $config['base_url']        = base_url().'admin/pertanyaan/pelatihan';

     $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      $data['title'] = "Pertanyaan";

      $this->template->load('admin', 'default', 'pertanyaan/pelatihan/index', $data);
    }

    public function add_pelatihan()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|min_length[3]');


      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'pertanyaan/pelatihan/add');
  
      }else{
        $judul = $this->input->post('pertanyaan');


        $judul = ucwords($judul);


        $data = array(
          'pertanyaan' => $judul    
        );
        $this->Pelatihan_model->add($data);
        $this->session->set_flashdata('success', 'Pertanyaan baru Ditambahkan!');

        redirect('admin/pertanyaan/pelatihan/index');
      }
    }

    

   public function edit_pelatihan($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|min_length[3]');
     
            
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Pelatihan_model->get($id);
        $this->template->load('admin', 'default', 'pertanyaan/pelatihan/edit', $data);
      }else{

     

        $judul = $this->input->post('pertanyaan');
  

        $judul = ucwords($judul);
        $data = array(
          'pertanyaan' => $judul,
 
        );


        $this->Pelatihan_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Perbaharui!');

        redirect('admin/pertanyaan/pelatihan/index');
      }
    }

   
    public function delete_pelatihan($id)
    {
      $name = $this->Pelatihan_model->get($id)->pertanyaan;

      // Delete subject
   
      $this->Pelatihan_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');

      // redirect
      redirect('admin/pertanyaan/pelatihan/index');
    }

    public function add_pengujian()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|min_length[3]');


      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'pertanyaan/pengujian/add');
  
      }else{
        $judul = $this->input->post('pertanyaan');


        $judul = ucwords($judul);


        $data = array(
          'pertanyaan' => $judul    
        );
        $this->Pengujian_model->add($data);
        $this->session->set_flashdata('success', 'Pertanyaan baru Ditambahkan!');

        redirect('admin/pertanyaan/pengujian/index');
      }
    }

    

    public function edit_pengujian($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|min_length[3]');
     
            
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Pengujian_model->get($id);
        $this->template->load('admin', 'default', 'pertanyaan/pengujian/edit', $data);
      }else{

     

        $judul = $this->input->post('pertanyaan');
  

        $judul = ucwords($judul);
        $data = array(
          'pertanyaan' => $judul,
 
        );


        $this->Pengujian_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Perbaharui!');

        redirect('admin/pertanyaan/pengujian/index');
      }
    }

   
    public function delete_pengujian($id)
    {
      $name = $this->Pengujian_model->get($id)->pertanyaan;

      // Delete subject
   
      $this->Pengujian_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');

      // redirect
      redirect('admin/pertanyaan/pengujian/index');
    }

    public function add_rancang()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|min_length[3]');


      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'pertanyaan/rancang_bangun/add');
  
      }else{
        $judul = $this->input->post('pertanyaan');


        $judul = ucwords($judul);


        $data = array(
          'pertanyaan' => $judul    
        );
        $this->Rancang_model->add($data);
        $this->session->set_flashdata('success', 'Pertanyaan baru Ditambahkan!');

        redirect('admin/pertanyaan/rancang_bangun/index');
      }
    }

    

    public function edit_rancang($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|min_length[3]');
     
            
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Rancang_model->get($id);
        $this->template->load('admin', 'default', 'pertanyaan/rancang_bangun/edit', $data);
      }else{

     

        $judul = $this->input->post('pertanyaan');
  

        $judul = ucwords($judul);
        $data = array(
          'pertanyaan' => $judul,
 
        );


        $this->Rancang_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Perbaharui!');

        redirect('admin/pertanyaan/rancang_bangun/index');
      }
    }

   
    public function delete_rancang($id)
    {
      $name = $this->Rancang_model->get($id)->pertanyaan;

      // Delete subject
   
      $this->Rancang_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');

      // redirect
      redirect('admin/pertanyaan/rancang_bangun/index');
    }

    
}