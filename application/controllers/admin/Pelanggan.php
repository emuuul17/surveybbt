<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('mypdf');
        $this->load->library('pagination');
      }

    public function index($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from tb_responden ';
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
      $config['base_url']        = base_url().'admin/pelanggan/index';

		 $this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(4);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $data['ListData'] = $this->db->query($qry)->result_array();
      
      $data['kontak'] = $this->Register_model->get_all();
      $data['title'] = "Data Pelanggan Survey";

      $this->template->load('admin', 'default', 'pelanggan/index', $data);
    }

    function search()
    {
      $nama = $this->input->post('nama');
      $kelamin = $this->input->post('kelamin');
      $perusahaan = $this->input->post('perusahaan');
      $alamat = $this->input->post('alamat');
      $kota = $this->input->post('kota');
      $provinsi = $this->input->post('provinsi');
      $tlp = $this->input->post('tlp');
      $jenis = $this->input->post('jenis');
         $qry = 'select * from tb_responden ';
         if($nama || $kelamin || $perusahaan || $alamat || $kota || $provinsi || $tlp || $jenis){
          $qry.="where nama like '%".$nama."%' AND jenis_kelamin like '%".$kelamin."%' and nama_perusahaan like '%".$perusahaan."%'and alamat like '%".$alamat."%' and kota like '%".$kota."%' and provinsi like '%".$provinsi."%' and no_tlp like '%".$tlp."%' and jenis_jasa like '%".$jenis."%' ";
         }
      $data['ListData'] = $this->db->query($qry)->result_array();
      $this->load->view('admin/pelanggan/search',$data);
    }

  //   public function nyetak()
  // {
  //   $this->load->library('mypdf');
  //   $data['data'] = array(
  //     ['nim'=>'123456789','name'=>'example name 1','jurusan'=>'Teknik Informatika'],
  //     ['nim'=>'123456789', 'name'=>'example name 2', 'jurusan'=>'Jaringan']
  //   );
  //   $this->mypdf->generate('Pelanggan/dompdf', $data, 'laporan-responden', 'A4', 'landscape');
  // }

    function cetak(){
      $nama = $this->uri->segment(4,0);
       if($nama == 'null'){
        $nama = '';
      }
      $kelamin = $this->uri->segment(5,0);
      if($kelamin == 'null'){
        $kelamin = '';
      }
      // var_dump($kelamin);die;
      $perusahaan = $this->uri->segment(6,0);
      if($perusahaan == 'null'){
        $perusahaan = '';
      }

      $alamat = $this->uri->segment(7,0);
         if($alamat == 'null'){
        $alamat = '';
      }
      $kota = $this->uri->segment(8,0);
       if($kota == 'null'){
        $kota = '';
      }
      $provinsi = $this->uri->segment(9,0);
       if($provinsi == 'null'){
        $provinsi = '';
      }
      $tlp = $this->uri->segment(10,0);
      if($tlp == 'null'){
        $tlp = '';
      }
      $jenis = $this->uri->segment(11,0);
       if($jenis == 'null'){
        $jenis = '';
      }
         $qry = 'select * from tb_responden ';
         if($nama || $kelamin || $perusahaan || $alamat || $kota || $provinsi || $tlp || $jenis){
          $qry.="where nama like '%".$nama."%' AND jenis_kelamin like '%".$kelamin."%' and nama_perusahaan like '%".$perusahaan."%'and alamat like '%".$alamat."%' and kota like '%".$kota."%' and provinsi like '%".$provinsi."%' and no_tlp like '%".$tlp."%' and jenis_jasa like '%".$jenis."%' ";
         }
        $data['ListData'] = $this->db->query($qry)->result_array();
        $this->mypdf->generate('admin/pelanggan/dompdf', $data, 'laporan-responden', 'A4', 'landscape');
        
    }

    // public function nyetak (){
    //   $data['pelanggan'] = $this->register_model->get_all("tb_responden")->result();
    //   $this->load->view('admin/print_pelanggan', $data);
    // }
}