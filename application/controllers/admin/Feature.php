<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends Admin_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
    }

    public function product($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from product ';
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
      $config['base_url']        = base_url().'admin/feature/product/pages';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      $data['title'] = "Product";

      $this->template->load('admin', 'default', 'feature/product/index', $data);
    }

    public function service($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from service ';
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
      $config['base_url']        = base_url().'admin/feature/service/pages';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      $data['title'] = "service";

      $this->template->load('admin', 'default', 'feature/service/index', $data);
    }

    public function add_product()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('sub_judul', 'Sub Judul', 'trim|min_length[3]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[10]');
      $this->form_validation->set_rules('sub_judul_2', 'Sub Judul 2', 'trim|min_length[3]');
      $this->form_validation->set_rules('deskripsi_2', 'Deskripsi 2', 'trim|min_length[10]');
      $this->form_validation->set_rules('sub_judul_3', 'Sub Judul 3', 'trim|min_length[3]');
      $this->form_validation->set_rules('deskripsi_3', 'Deskripsi 3', 'trim|min_length[10]');

      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'feature/product/add');
  
      }else{
        $judul = $this->input->post('judul');
        $sub_judul = $this->input->post('sub_judul');
        $sub_judul_2 = $this->input->post('sub_judul_2');
        $sub_judul_3 = $this->input->post('sub_judul_3');

        $judul = ucwords($judul);
        $sub_judul = ucwords($sub_judul);
        $sub_judul_2 = ucwords($sub_judul_2);
        $sub_judul_3 = ucwords($sub_judul_3);

        $data = array(
          'judul' => $judul,
          'sub_judul' => $sub_judul,
          'sub_judul_2' => $sub_judul_2,
          'sub_judul_3' => $sub_judul_3,
          'deskripsi' => $this->input->post('deskripsi'),
          'deskripsi_2' => $this->input->post('deskripsi_2'),
          'deskripsi_3' => $this->input->post('deskripsi_3'),
          'img' => $this->_upload()
        );

        $this->Product_model->add($data);
        $this->session->set_flashdata('success', 'Product baru Ditambahkan!');

        redirect('admin/feature/product');
      }
    }

    public function add_service()
    {

      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('sub_judul', 'Sub Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_1', 'List 1', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_2', 'List 2', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_3', 'List 3', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_4', 'List 4', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_5', 'List 5', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_6', 'List 6', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_7', 'List 7', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_8', 'List 8', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_9', 'List 9', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_10', 'List 10', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_11', 'List 11', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_12', 'List 12', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_13', 'List 13', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_14', 'List 14', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_15', 'List 15', 'trim|min_length[3]');


      if($this->form_validation->run() == FALSE){

        $this->template->load('admin', 'default', 'feature/service/add');
  
      }else{
        $judul = $this->input->post('judul');
        $sub_judul = $this->input->post('sub_judul');
        $desk_1 = $this->input->post('desk_1');
        $desk_2 = $this->input->post('desk_2');
        $desk_3 = $this->input->post('desk_3');
        $desk_4 = $this->input->post('desk_4');
        $desk_5 = $this->input->post('desk_5');
        $desk_6 = $this->input->post('desk_6');
        $desk_7 = $this->input->post('desk_7');
        $desk_8 = $this->input->post('desk_8');
        $desk_9 = $this->input->post('desk_9');
        $desk_10 = $this->input->post('desk_10');
        $desk_11 = $this->input->post('desk_11');
        $desk_12 = $this->input->post('desk_12');
        $desk_13 = $this->input->post('desk_13');
        $desk_14 = $this->input->post('desk_14');
        $desk_15 = $this->input->post('desk_15');

        $judul = ucwords($judul);
        $sub_judul = ucwords($sub_judul);
        $desk_1 = ucwords($desk_1);
        $desk_2 = ucwords($desk_2);
        $desk_3 = ucwords($desk_3);
        $desk_4 = ucwords($desk_4);
        $desk_5 = ucwords($desk_5);
        $desk_6 = ucwords($desk_6);
        $desk_7 = ucwords($desk_7);
        $desk_8 = ucwords($desk_8);
        $desk_9 = ucwords($desk_9);
        $desk_10 = ucwords($desk_10);
        $desk_11 = ucwords($desk_11);
        $desk_12 = ucwords($desk_12);
        $desk_13 = ucwords($desk_13);
        $desk_14 = ucwords($desk_14);
        $desk_15 = ucwords($desk_15);

        $data = array(
          'img' => $this->_upload(),
          'judul' => $judul,
          'sub_judul' => $sub_judul,
          'desk_1' => $desk_1,
          'desk_2' => $desk_2,
          'desk_3' => $desk_3,
          'desk_4' => $desk_4,
          'desk_5' => $desk_5,
          'desk_6' => $desk_6,
          'desk_7' => $desk_7,
          'desk_8' => $desk_8,
          'desk_9' => $desk_9,
          'desk_10' => $desk_10,
          'desk_11' => $desk_11,
          'desk_12' => $desk_12,
          'desk_13' => $desk_13,
          'desk_14' => $desk_14,
          'desk_15' => $desk_15
        );

        $this->Service_model->add($data);
        $this->session->set_flashdata('success', 'service baru Ditambahkan!');

        redirect('admin/feature/service');
      }
    }

    public function editProduct($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('sub_judul', 'Sub Judul', 'trim|min_length[3]');
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|min_length[10]');
      $this->form_validation->set_rules('sub_judul_2', 'Sub Judul 2', 'trim|min_length[3]');
      $this->form_validation->set_rules('deskripsi_2', 'Deskripsi 2', 'trim|min_length[10]');
      $this->form_validation->set_rules('sub_judul_3', 'Sub Judul 3', 'trim|min_length[3]');
      $this->form_validation->set_rules('deskripsi_3', 'Deskripsi 3', 'trim|min_length[10]');
            
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Product_model->get($id);
        $this->template->load('admin', 'default', 'feature/product/edit', $data);
      }else{

        if(!empty($_FILES['img']['name'])) {
          $this->_deleteimgproduct($id);
          $img = $this->_upload();
        } else {
          $img = $this->input->post('old_img');
        }

        $judul = $this->input->post('judul');
        $sub_judul = $this->input->post('sub_judul');
        $sub_judul_2 = $this->input->post('sub_judul_2');
        $sub_judul_3 = $this->input->post('sub_judul_3');

        $judul = ucwords($judul);
        $sub_judul = ucwords($sub_judul);
        $sub_judul_2 = ucwords($sub_judul_2);
        $sub_judul_3 = ucwords($sub_judul_3);

        $data = array(
          'judul' => $judul,
          'sub_judul' => $sub_judul,
          'sub_judul_2' => $sub_judul_2,
          'sub_judul_3' => $sub_judul_3,
          'deskripsi' => $this->input->post('deskripsi'),
          'deskripsi_2' => $this->input->post('deskripsi_2'),
          'deskripsi_3' => $this->input->post('deskripsi_3'),
          'img' => $img
        );


        $this->Product_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Perbaharui!');

        redirect('admin/feature/product');
      }
    }

    public function editService($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('sub_judul', 'Sub Judul', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_1', 'List 1', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_2', 'List 2', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_3', 'List 3', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('desk_4', 'List 4', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_5', 'List 5', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_6', 'List 6', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_7', 'List 7', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_8', 'List 8', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_9', 'List 9', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_10', 'List 10', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_11', 'List 11', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_12', 'List 12', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_13', 'List 13', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_14', 'List 14', 'trim|min_length[3]');
      $this->form_validation->set_rules('desk_15', 'List 15', 'trim|min_length[3]');
            
      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Service_model->get($id);
        $this->template->load('admin', 'default', 'feature/service/edit', $data);
      }else{

        if(!empty($_FILES['img']['name'])) {
          $this->_deleteimgservice($id);
          $img = $this->_upload();
        } else {
          $img = $this->input->post('old_img');
        }

        $judul = $this->input->post('judul');
        $sub_judul = $this->input->post('sub_judul');
        $desk_1 = $this->input->post('desk_1');
        $desk_2 = $this->input->post('desk_2');
        $desk_3 = $this->input->post('desk_3');
        $desk_4 = $this->input->post('desk_4');
        $desk_5 = $this->input->post('desk_5');
        $desk_6 = $this->input->post('desk_6');
        $desk_7 = $this->input->post('desk_7');
        $desk_8 = $this->input->post('desk_8');
        $desk_9 = $this->input->post('desk_9');
        $desk_10 = $this->input->post('desk_10');
        $desk_11 = $this->input->post('desk_11');
        $desk_12 = $this->input->post('desk_12');
        $desk_13 = $this->input->post('desk_13');
        $desk_14 = $this->input->post('desk_14');
        $desk_15 = $this->input->post('desk_15');

        $judul = ucwords($judul);
        $sub_judul = ucwords($sub_judul);
        $desk_1 = ucwords($desk_1);
        $desk_2 = ucwords($desk_2);
        $desk_3 = ucwords($desk_3);
        $desk_4 = ucwords($desk_4);
        $desk_5 = ucwords($desk_5);
        $desk_6 = ucwords($desk_6);
        $desk_7 = ucwords($desk_7);
        $desk_8 = ucwords($desk_8);
        $desk_9 = ucwords($desk_9);
        $desk_10 = ucwords($desk_10);
        $desk_11 = ucwords($desk_11);
        $desk_12 = ucwords($desk_12);
        $desk_13 = ucwords($desk_13);
        $desk_14 = ucwords($desk_14);
        $desk_15 = ucwords($desk_15);

        $data = array(
          'img' => $img,
          'judul' => $judul,
          'sub_judul' => $sub_judul,
          'desk_1' => $desk_1,
          'desk_2' => $desk_2,
          'desk_3' => $desk_3,
          'desk_4' => $desk_4,
          'desk_5' => $desk_5,
          'desk_6' => $desk_6,
          'desk_7' => $desk_7,
          'desk_8' => $desk_8,
          'desk_9' => $desk_9,
          'desk_10' => $desk_10,
          'desk_11' => $desk_11,
          'desk_12' => $desk_12,
          'desk_13' => $desk_13,
          'desk_14' => $desk_14,
          'desk_15' => $desk_15
        );


        $this->Service_model->update($id, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Perbaharui!');

        redirect('admin/feature/service');
      }
    }

    public function deleteProduct($id)
    {
      $name = $this->Product_model->get($id)->judul;

      // Delete subject
      $this->_deleteimgproduct($id);
      $this->Product_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');

      // redirect
      redirect('admin/feature/product');
    }

    public function deleteService($id)
    {
      $name = $this->Service_model->get($id)->judul;

      // Delete subject
      $this->_deleteimgservice($id);
      $this->Service_model->delete($id);

      // set msg
      $this->session->set_flashdata('success', 'Data Berhasil Di Hapus!');

      // redirect
      redirect('admin/feature/service');
    }

    public function _upload()
    {
      $upload_path = './assets/upload/feature/';

      $config['upload_path']          = $upload_path;
      $config['allowed_types']        = 'jpg|png|jpeg';
      $config['file_name']            = 'Feature'.'-'.date('YmdHis');
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

    public function _deleteimgproduct($id)
    {
      $product = $this->Product_model->get($id);
      if($product->img != 'default.png') {
        $filename = explode(".", $product->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/feature/$filename.*"));
      }
    }

    public function _deleteimgservice($id)
    {
      $service = $this->Service_model->get($id);
      if($service->img != 'default.png') {
        $filename = explode(".", $service->img)[0];
        return array_map('unlink', glob(FCPATH."/assets/upload/feature/$filename.*"));
      }
    }
}