<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
      }

      public function index()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login');
          }
          $qry = 'select * from customer ';
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
          $config['base_url']        = base_url().'admin/customer';
    
             $this->pagination->initialize($config);
    
         $data['paginglinks']       = $this->pagination->create_links();
         $data['per_page']          = $this->uri->segment(4);
         $data['offset']            = $offset;
          if($data['paginglinks']!= '') {
            $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
          }
         $qry .= " limit {$per_page} offset {$offset} ";
         $data['ListData'] = $this->db->query($qry)->result_array();
          
          $data['customer'] = $this->Customer_model->get_all();
          $data['title'] = "Partner Antawijaya";
    
          $this->template->load('admin', 'default', 'customer/index', $data);
    }

    public function add()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama Partner', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'customer/add');
  
      }else{
        $nama = $this->input->post('nama');
        $nama = ucwords($nama);

        $data = array(
          'nama' => $nama,
          'img' => $this->_upload(),
        );

        $this->Customer_model->add($data);
        $this->session->set_flashdata('success', 'Data baru Ditambahkan!');

        redirect('admin/customer/index');
      }
    }

    public function edit($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]');

      if($this->form_validation->run() == FALSE){

        $data['item'] = $this->Customer_model->get($id);
        $this->template->load('admin', 'default', 'customer/edit', $data);

      }else{

        if(!empty($_FILES['img']['name'])) {
          $this->_deleteimg($id);
          $img = $this->_upload();
        } else {
          $img = $this->input->post('old_img');
        }
    
        $nama = $this->input->post('nama');
        $nama = ucwords($nama);

        $data = array(
          'nama' => $nama,
          'img' => $img
        );

        $this->Customer_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Telah Di Perbaharui!');

        redirect('admin/customer/index');
      }
    }

    public function delete($id)
    {
      $name = $this->Customer_model->get($id)->nama;

      $this->_deleteimg($id);
      // Delete subject
      $this->Customer_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Telah Di Hapus!');

      // redirect
      redirect('admin/customer/index');
    }

    public function _upload()
    {
      $upload_path = './assets/upload/partner/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png|jpeg';
      $config['file_name']            = 'Partner'.'-'.date('YmdHis');
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
      $customer = $this->Customer_model->get($id);
      if($customer->img != 'default.png') {
        $filename = explode(".", $customer->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/partner/$filename.*"));
      }
    }
 }