<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
      }

    public function welcome()
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $id = 1;

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[5]');

      if($this->form_validation->run() == FALSE){
        $data['welcome'] = $this->About_model->get($id);
        $data['title'] = " Welcome To Antawijaya";
  
        $this->template->load('admin', 'default', 'about/welcome', $data);
      }else{
          $title = $this->input->post('judul');
          $title = ucwords($title);

          if(!empty($_FILES['img']['name'])) {
            $img = $this->_upload();
          } else {
            $img = $this->input->post('old_img');
          }

        $data = array(
          'judul' => $title,
          'deskripsi' => $this->input->post('deskripsi'),
          'img' => $img
        );

        $this->About_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/welcome');
      }
    }

    public function vimi()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from about_visimisi ';
          $per_page = 31;
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
          $config['base_url']        = base_url().'admin/about/vimi';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['vimi'] = $this->Visimisi_model->get_all();
          $data['title'] = "Visi Misi";
    
          $this->template->load('admin', 'default', 'about/vimi/index', $data);
    }

    public function addvimi()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[8]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/vimi/add');
  
      }else{
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul,
          'deskripsi' => $this->input->post('deskripsi')
        );

        $this->Visimisi_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/vimi');
      }
    }

    public function editvimi($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[8]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Visimisi_model->get($id);
        $this->template->load('admin', 'default', 'about/vimi/edit', $data);

      }else{
    
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul,
          'deskripsi' => $this->input->post('deskripsi')
        );

        $this->Visimisi_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/vimi');
      }
    }

    public function deletevimi($id)
    {
      $name = $this->Visimisi_model->get($id)->judul;

      // Delete subject
      $this->Visimisi_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/vimi');
    }

    public function nilai()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from about_nilai ';
          $per_page = 31;
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
          $config['base_url']        = base_url().'admin/about/nilai';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['nilai'] = $this->Nilai_model->get_all();
          $data['title'] = "Nilai Nilai";
    
          $this->template->load('admin', 'default', 'about/nilai/index', $data);
    }

    public function addnilai()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[8]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/nilai/add');
  
      }else{
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul,
          'deskripsi' => $this->input->post('deskripsi')
        );

        $this->Nilai_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/nilai');
      }
    }

    public function editnilai($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[8]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Nilai_model->get($id);
        $this->template->load('admin', 'default', 'about/nilai/edit', $data);

      }else{
    
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul,
          'deskripsi' => $this->input->post('deskripsi')
        );

        $this->Nilai_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/nilai');
      }
    }

    public function deletenilai($id)
    {
      $name = $this->Nilai_model->get($id)->judul;

      // Delete subject
      $this->Nilai_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/nilai');
    }

    public function metodologi()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from about_metodologi ';
          $per_page = 31;
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
          $config['base_url']        = base_url().'admin/about/metodologi';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['metodologi'] = $this->Metodologi_model->get_all();
          $data['title'] = "Metodologi";
    
          $this->template->load('admin', 'default', 'about/metodologi/index', $data);
    }

    public function addmetodologi()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/metodologi/add');
  
      }else{
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul
        );

        $this->Metodologi_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/metodologi');
      }
    }

    public function editmetodologi($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Metodologi_model->get($id);
        $this->template->load('admin', 'default', 'about/metodologi/edit', $data);

      }else{
    
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul
        );

        $this->Metodologi_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/metodologi');
      }
    }

    public function deletemetodologi($id)
    {
      $name = $this->Metodologi_model->get($id)->judul;

      // Delete subject
      $this->Metodologi_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/metodologi');
    }

    public function filosofi()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from about_filosofi ';
          $per_page = 31;
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
          $config['base_url']        = base_url().'admin/about/filosofi';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['filosofi'] = $this->Filosofi_model->get_all();
          $data['title'] = "filosofi";
    
          $this->template->load('admin', 'default', 'about/filosofi/index', $data);
    }

    public function addfilosofi()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/filosofi/add');
  
      }else{
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul
        );

        $this->Filosofi_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/filosofi');
      }
    }

    public function editfilosofi($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Filosofi_model->get($id);
        $this->template->load('admin', 'default', 'about/filosofi/edit', $data);

      }else{
    
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul
        );

        $this->Filosofi_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/filosofi');
      }
    }

    public function deletefilosofi($id)
    {
      $name = $this->Filosofi_model->get($id)->judul;

      // Delete subject
      $this->Filosofi_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/filosofi');
    }

    public function sasaran()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from about_sasaran ';
          $per_page = 31;
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
          $config['base_url']        = base_url().'admin/about/sasaran';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['sasaran'] = $this->Target_model->get_all();
          $data['title'] = "Target Antawijaya";
    
          $this->template->load('admin', 'default', 'about/sasaran/index', $data);
    }

    public function addsasaran()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[4]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/sasaran/add');
  
      }else{
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul,
          'deskripsi' => $this->input->post('deskripsi'),
          'img' => $this->_uploadtarget()
        );

        $this->Target_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/sasaran');
      }
    }

    public function editsasaran($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Jenis', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[4]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Target_model->get($id);
        $this->template->load('admin', 'default', 'about/sasaran/edit', $data);

      }else{

        if(!empty($_FILES['img']['name'])) {
          $img = $this->_uploadtarget();
        } else {
          $img = $this->input->post('old_img');
        }
    
        $judul = $this->input->post('judul');
        $judul = strtoupper($judul);

        $data = array(
          'judul' => $judul,
          'deskripsi' => $this->input->post('deskripsi'),
          'img' => $img
        );

        $this->Target_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/sasaran');
      }
    }

    public function deletesasaran($id)
    {
      $name = $this->Target_model->get($id)->judul;

      $this->_deleteimgtarget($id);
      // Delete subject
      $this->Target_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/sasaran');
    }

    public function tim()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from about_tim ';
          $per_page = 31;
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
          $config['base_url']        = base_url().'admin/about/tim';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['tim'] = $this->Team_model->get_all();
          $data['title'] = "Team Antawijaya";
    
          $this->template->load('admin', 'default', 'about/tim/index', $data);
    }

    public function addtim()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required|min_length[4]');
      $this->form_validation->set_rules('linkedin', 'Linkedin', 'trim|min_length[3]');
      $this->form_validation->set_rules('twitter', 'Twitter', 'trim|min_length[3]');
      $this->form_validation->set_rules('website', 'Personal Blog', 'trim|min_length[3]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/tim/add');
  
      }else{
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $jabatan = ucwords($jabatan);
        $nama = ucwords($nama);

        $data = array(
          'nama' => $nama,
          'jabatan' => $jabatan,
          'img' => $this->_uploadttim(),
          'linkedin' => $this->input->post('linkedin'),
          'twitter' => $this->input->post('twitter'),
          'website' => $this->input->post('website')
        );

        $this->Team_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/tim');
      }
    }

    public function edittim($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required|min_length[4]');
      $this->form_validation->set_rules('linkedin', 'Linkedin', 'trim|min_length[3]');
      $this->form_validation->set_rules('twitter', 'Twitter', 'trim|min_length[3]');
      $this->form_validation->set_rules('website', 'Personal Blog', 'trim|min_length[3]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Team_model->get($id);
        $this->template->load('admin', 'default', 'about/tim/edit', $data);

      }else{

        if(!empty($_FILES['img']['name'])) {
          $img = $this->_uploadtim();
        } else {
          $img = $this->input->post('old_img');
        }
    
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $jabatan = ucwords($jabatan);
        $nama = ucwords($nama);

        $data = array(
          'nama' => $nama,
          'jabatan' => $jabatan,
          'img' => $img,
          'linkedin' => $this->input->post('linkedin'),
          'twitter' => $this->input->post('twitter'),
          'website' => $this->input->post('website')
        );

        $this->Team_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/tim');
      }
    }

    public function deletetim($id)
    {
      $name = $this->Team_model->get($id)->judul;

      $this->_deleteimgtim($id);
      // Delete subject
      $this->Team_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/tim');
    }

    public function kegiatan($offset = 0)
    {
      if(!$this->session->userdata('logged_in')){
          redirect('admin/login');
        }
        $qry = 'select * from about_foto';
        $per_page = 31;
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
        $config['base_url']        = base_url().'admin/about/kegiatan';
  
            $this->pagination->initialize($config);
  
        $data['paginglinks']       = $this->pagination->create_links();
        $data['per_page']          = $this->uri->segment(4);
        $data['offset']            = $offset;
        if($data['paginglinks']!= '') {
          $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
        }
        $qry .= " limit {$per_page} offset {$offset} ";

        $data['ListData'] = $this->db->query($qry)->result_array();
        $data['kegiatan'] = $this->Gallery_model->get_all();
        $data['title'] = "Foto Kegiatan";
  
        $this->template->load('admin', 'default', 'about/kegiatan/index', $data);
    }

    public function addkegiatan()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('title', 'Judul Kegiatan', 'trim|required|min_length[2]');


      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'about/kegiatan/add');
  
      }else{
        $title = $this->input->post('title');
        $title = ucwords($title);

        $data = array(
          'title' => $title,
          'img' => $this->_uploadkegiatan()
        );

        $this->Gallery_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/about/kegiatan');
      }
    }

    public function editkegiatan($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('title', 'Judul Kegiatan', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Gallery_model->get($id);
        $this->template->load('admin', 'default', 'about/kegiatan/edit', $data);

      }else{

        if(!empty($_FILES['img']['name'])) {
          $img = $this->_uploadkegiatan();
        } else {
          $img = $this->input->post('old_img');
        }
    
        $title = $this->input->post('title');
        $title = ucwords($title);


        $data = array(
          'title' => $title,
          'img' => $this->_uploadkegiatan()
        );

        $this->Gallery_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/about/kegiatan');
      }
    }

    public function deletekegiatan($id)
    {
      $name = $this->Gallery_model->get($id)->judul;

      $this->_deleteimgkegiatan($id);
      // Delete subject
      $this->Gallery_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/about/kegiatan');
    }


    
    public function _upload()
    {
      $upload_path = './assets/upload/welcome/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png';
      $config['file_name']            = 'Banner'.'-'.date('YmdHis');
      $config['overwrite']			      = true;
      $config['max_size']             = 2048;
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('img'))
      {
        $error = array('error' => $this->upload->display_errors());
        return 'default.png';
      }else{
        $datafile = $this->upload->data();
        return $datafile['file_name'];
      }
    }

    public function _deleteimg($id)
    {
      $about = $this->About_model->get($id);
      if($about->img != 'default.png') {
        $filename = explode(".", $about->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/banner/$filename.*"));
      }
    }

    public function _uploadtarget()
    {
      $upload_path = './assets/upload/target/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png';
      $config['file_name']            = 'Target'.'-'.date('YmdHis');
      $config['overwrite']			      = true;
      $config['max_size']             = 2048;
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('img'))
      {
        $error = array('error' => $this->upload->display_errors());
        return 'default.png';
      }else{
        $datafile = $this->upload->data();
        return $datafile['file_name'];
      }
    }

    public function _deleteimgtarget($id)
    {
      $sasaran = $this->Target_model->get($id);
      if($sasaran->img != 'default.png') {
        $filename = explode(".", $sasaran->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/target/$filename.*"));
      }
    }
    
    public function _uploadttim()
    {
      $upload_path = './assets/upload/tim/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png';
      $config['file_name']            = 'Tim'.'-'.date('YmdHis');
      $config['overwrite']			      = true;
      $config['max_size']             = 2048;
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('img'))
      {
        $error = array('error' => $this->upload->display_errors());
        return 'default.png';
      }else{
        $datafile = $this->upload->data();
        return $datafile['file_name'];
      }
    }

    public function _deleteimgtim($id)
    {
      $tim = $this->Team_model->get($id);
      if($tim->img != 'default.png') {
        $filename = explode(".", $tim->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/tim/$filename.*"));
      }
    }

    public function _uploadkegiatan()
    {
      $upload_path = './assets/upload/kegiatan/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png';
      $config['file_name']            = 'Kegiatan'.'-'.date('YmdHis');
      $config['overwrite']			      = true;
      $config['max_size']             = 2048;
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('img'))
      {
        $error = array('error' => $this->upload->display_errors());
        return 'default.png';
      }else{
        $datafile = $this->upload->data();
        return $datafile['file_name'];
      }
    }

    public function _deleteimgkegiatan($id)
    {
      $kegiatan = $this->Gallery_model->get($id);
      if($kegiatan->img != 'default.png') {
        $filename = explode(".", $kegiatan->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/kegiatan/$filename.*"));
      }
    }
}