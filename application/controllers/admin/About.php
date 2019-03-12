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