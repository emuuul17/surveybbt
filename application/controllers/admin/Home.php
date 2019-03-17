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
      $qry = 'select * from home_testi ';
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
      $config['base_url']        = base_url().'admin/home/testimoni';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(4);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      
      $data['kontak'] = $this->Home_model->get_all();
      $data['title'] = "Testimoni";

      $this->template->load('admin', 'default', 'home/testimoni/index', $data);
    }

    public function addtestimoni()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('sub_nama', 'Pekerjaan', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('testimoni', 'Testimoni', 'trim|required|min_length[10]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'home/testimoni/add');
  
      }else{
        $name = $this->input->post('nama');
        $pekerjaan = $this->input->post('sub_nama');
        $name = ucwords($name);
        $pekerjaan = ucwords($pekerjaan);

        $data = array(
          'nama' => $name,
          'sub_nama' => $pekerjaan,
          'testimoni' => $this->input->post('testimoni'),
          'img' => $this->_upload()
        );

        $this->Home_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/home/testimoni');
      }
    }

    public function edittestimoni($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('sub_nama', 'Pekerjaan', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('testimoni', 'Testimoni', 'trim|required|min_length[10]');
        
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Home_model->get($id);
  
        // load template
        $this->template->load('admin', 'default', 'home/testimoni/edit', $data);
      }else{

        if(!empty($_FILES['img']['name'])) {
            $img = $this->_upload();
          } else {
            $img = $this->input->post('old_img');
          }
    
          $name = $this->input->post('nama');
          $pekerjaan = $this->input->post('sub_nama');
          $name = ucwords($name);
          $pekerjaan = ucwords($pekerjaan);

          $data = array(
            'nama' => $name,
            'sub_nama' => $pekerjaan,
            'testimoni' => $this->input->post('testimoni'),
            'img' => $img
          );

        $this->Home_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/home/testimoni');
      }
    }

    public function deletetestimoni($id)
    {
      $name = $this->Home_model->get($id)->nama;

      $this->_deleteimg($id);
      $this->Home_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/home/testimoni');
    }

    public function owner($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from home_owner ';
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
      $config['base_url']        = base_url().'admin/home/owner';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(4);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      
      $data['kontak'] = $this->Owner_model->get_all();
      $data['title'] = "Owner";

      $this->template->load('admin', 'default', 'home/owner/index', $data);
    }

    public function addowner()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('gelar', 'Gelar', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[10]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'home/owner/add');
  
      }else{
        $name = $this->input->post('nama');
        $pekerjaan = $this->input->post('gelar');
        $name = strtoupper($name);
        $pekerjaan = ucwords($pekerjaan);

        $data = array(
          'nama' => $name,
          'gelar' => $pekerjaan,
          'deskripsi' => $this->input->post('deskripsi'),
          'img' => $this->_uploadowner()
        );

        $this->Owner_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/home/owner');
      }
    }

    public function editowner($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('gelar', 'Gelar', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[10]');
        
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Owner_model->get($id);
  
        // load template
        $this->template->load('admin', 'default', 'home/owner/edit', $data);
      }else{

        if(!empty($_FILES['img']['name'])) {
           $this->_deleteimgowner($id);
            $img = $this->_uploadowner();
          } else {
            $img = $this->input->post('old_img');
          }
    
          $name = $this->input->post('nama');
          $pekerjaan = $this->input->post('gelar');
          $name = strtoupper($name);
          $pekerjaan = ucwords($pekerjaan);
  
          $data = array(
            'nama' => $name,
            'gelar' => $pekerjaan,
            'deskripsi' => $this->input->post('deskripsi'),
            'img' => $img
          );

        $this->Owner_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/home/owner');
      }
    }

    public function deleteowner($id)
    {
      $name = $this->Owner_model->get($id)->nama;

      $this->_deleteimgowner($id);
      $this->Owner_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/home/owner');
    }



    public function _upload()
    {
      $upload_path = './assets/upload/testimoni/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png';
      $config['file_name']            = 'Testimoni'.'-'.date('YmdHis');
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
      $testimoni = $this->Home_model->get($id);
      if($testimoni->img != 'default.png') {
        $filename = explode(".", $testimoni->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/testimoni/$filename.*"));
      }
    }

    public function _uploadowner()
    {
      $upload_path = './assets/upload/owner/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png';
      $config['file_name']            = 'Owner'.'-'.date('YmdHis');
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

    public function _deleteimgowner($id)
    {
      $owner = $this->Owner_model->get($id);
      if($owner->img != 'default.png') {
        $filename = explode(".", $owner->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/owner/$filename.*"));
      }
    }
}