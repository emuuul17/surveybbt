<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
      }

    public function footer()
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
  
        $this->template->load('admin', 'default', 'settings/footer/index', $data);
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

        redirect('admin/settings/footer/index');
      }
    }

    public function banner()
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from banner ';
      $per_page = 10;
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
      $config['base_url']        = base_url().'admin/setting/banner/pages';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      $data['title'] = "Banner";

      $this->template->load('admin', 'default', 'settings/banner/index', $data);
    }

    public function add_banner()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('title', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('sub_title', 'Sub Judul', 'trim|min_length[3]');
      $this->form_validation->set_rules('content', 'Deskripsi', 'trim|required|min_length[10]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'settings/banner/add');
  
      }else{
        $title = $this->input->post('title');
        $sub_title = $this->input->post('sub_title');
        $content = $this->input->post('content');

        $title = ucwords($title);
        $sub_title = ucwords($sub_title);
        $content = ucwords($content);

        $data = array(
          'title' => $title,
          'sub_title' => $sub_title,
          'content' => $content,
          'img' => $this->_upload()
        );

        $this->Banner_model->add($data);
        $this->session->set_flashdata('success', 'banner baru Ditambahkan!');

        redirect('admin/settings/banner');
      }
    }

    public function editbanner($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $this->form_validation->set_rules('title', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('sub_title', 'Sub Judul', 'trim|min_length[3]');
      $this->form_validation->set_rules('content', 'Deskripsi', 'trim|required|min_length[10]');

      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Banner_model->get($id);
        $this->template->load('admin', 'default', 'settings/banner/edit', $data);
      }else{

      $upload_path = './assets/css/images/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg';
      $config['file_name']            = $id.'banner';
      $config['overwrite']			      = true;
      $config['max_size']             = 2048;
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if(!empty($_FILES['img']['name'])) {
       if (!$this->upload->do_upload('img'))
        {
          $error = array('error' => $this->upload->display_errors());
          $img = 'default.png';
        }else{
          $datafile = $this->upload->data();
          $img = $datafile['file_name'];
        }
      }else {
        $img = $id.$this->input->post('old_img');
      }


        $title = $this->input->post('title');
        $sub_title = $this->input->post('sub_title');
        $content = $this->input->post('content');

        $title = ucwords($title);
        $sub_title = ucwords($sub_title);
        $content = ucwords($content);

        $data = array(
          'title' => $title,
          'sub_title' => $sub_title,
          'content' => $content,
          'img' => $img
        );

        $this->Banner_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Perbaharui!');

        redirect('admin/settings/banner');
      }
    }

    public function deletebanner($id)
    {
      $name = $this->Banner_model->get($id)->title;

      // Delete subject
      $this->_deleteimg($id);
      $this->Banner_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');

      // redirect
      redirect('admin/settings/banner');
    }

    public function _upload()
    {
      $upload_path = './assets/css/images/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg';
      $config['file_name']            = 'Banner';
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
      $product = $this->Banner_model->get($id);
      if($product->img != 'default.png') {
        $filename = explode(".", $product->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/banner/$filename.*"));
      }
    }
}