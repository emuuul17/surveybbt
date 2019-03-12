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

        $data = array(
          'judul' => $title,
          'deskripsi' => $this->input->post('deskripsi'),
          'img' => $this->_upload()
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
}