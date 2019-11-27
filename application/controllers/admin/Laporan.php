<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
          $this->load->library('mypdf');
      }

    public function index($offset = 0)
	  {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }
      $qry = 'select * from laporan ';
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
      $data['title'] = "Hasil Survey";

      $this->template->load('admin', 'default', 'laporan/index', $data);
    }


    public function show($id)
    {
      if(!$this->session->userdata('logged_in')){
        redirect('admin/login');
      }

      $this->form_validation->set_rules('judul', 'Judul', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('durasi', 'Durasi', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('pembicara', 'Pembicara', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

      if($this->form_validation->run() == FALSE){
        $data['item'] = $this->Register_model->get($id);
  
        // load template
        $this->template->load('admin', 'default', 'register/show', $data);
      }
    }

    public function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->pelanggan_model->search($keyword);
        $this->load->view('admin/pelanggan',$data);
    }

    public function view_semua_laporan()
    {
      $data['laporan'] = $this->qry_semua_laporan();
      $this->load->view('admin/laporan/semua_laporan', $data);
    }

    public function view_by_tanggal($awal = 0,$akhir = 0)
    {
      $pelatihan = 'Pelatihan';
      $rancang = 'RancangBangun';
      $pengujian = 'Pengujian';
      $anjay = $this->laporan_model->cari($awal, $akhir);
      $arr = [];
      foreach ($anjay as $key => $value) {
        if($value->jenis_jasa == $pelatihan){
            $tmp = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->pelatihan_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->pelatihan_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->pelatihan_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->pelatihan_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->pelatihan_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->pelatihan_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->pelatihan_survey_7)              
            ];
            array_push($arr, $tmp);
        }
        if($value->jenis_jasa == $pengujian){
          $tmp2 = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->pengujian_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->pengujian_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->pengujian_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->pengujian_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->pengujian_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->pengujian_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->pengujian_survey_7)
          ];
          array_push($arr, $tmp2);
        }
        if($value->jenis_jasa == $rancang){
          $tmp3 = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->rancang_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->rancang_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->rancang_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->rancang_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->rancang_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->rancang_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->rancang_survey_7)
          ];
          array_push($arr, $tmp3);
        }
      }
      $data['laporan'] = $arr;
      $this->load->view('admin/laporan/semua_laporan', $data);
    }

    public function view_by_jenis($jenis = string, $awal = 0,$akhir = 0)
    {
      $pelatihan = 'Pelatihan';
      $rancang = 'RancangBangun';
      $pengujian = 'Pengujian';
      $anjay = $this->laporan_model->cariByJenis($jenis, $awal, $akhir);
      $arr = [];
      foreach ($anjay as $key => $value) {
        if($value->jenis_jasa == $pelatihan){
            $tmp = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->pelatihan_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->pelatihan_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->pelatihan_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->pelatihan_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->pelatihan_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->pelatihan_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->pelatihan_survey_7)              
            ];
            array_push($arr, $tmp);
        }
        if($value->jenis_jasa == $pengujian){
          $tmp2 = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->pengujian_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->pengujian_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->pengujian_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->pengujian_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->pengujian_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->pengujian_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->pengujian_survey_7)
          ];
          array_push($arr, $tmp2);
        }
        if($value->jenis_jasa == $rancang){
          $tmp3 = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->rancang_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->rancang_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->rancang_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->rancang_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->rancang_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->rancang_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->rancang_survey_7)
          ];
          array_push($arr, $tmp3);
        }
      }
      $data['laporan'] = $arr;
      $this->load->view('admin/laporan/semua_laporan', $data);
    }

    private function changeToTeks($value)
    {
      if($value == 1){
        $value = 'Tidak Puas';
      }
      if($value == 2){
        $value = 'Kurang Puas ';
      }
      if($value == 3){
        $value = 'Cukup Puas';
      }
      if($value == 4){
        $value = 'Puas';
      }
      if($value == 5){
        $value = 'Sangat Puas';
      }

      return $value;
    }
    
    private function tanggal_indo($date)
    {
      $a=date('d-M-Y', strtotime($date));
      return $a;
    }

    public function cetak(){
      $awal = $this->uri->segment(4,0);
       if($awal == 'null'){
        $awal = '';
      }
      $akhir = $this->uri->segment(5,0);
      if($akhir == 'null'){
        $akhir = '';
      }
      $jenis = $this->uri->segment(6,0);
      if($jenis == 'null'){
        $jenis = '';
      }else if ( $jenis == 'Pelatihan'){
        $tmp_arr = [];
        $arr_pelatihan = [];
         $qry = "select * from laporan_pelatihan where tanggal_pendaftaran BETWEEN '".$awal."' AND '".$akhir."'";
        $pelatihan_qry = $this->db->query($qry)->result_array();

        foreach ($pelatihan_qry as $key => $value) {
          $tmp_arr = [
            'nama' => $value['nama'],
            'pelatihan_survey_1' => $this->changeToTeks($value['pelatihan_survey_1']),
            'pelatihan_survey_2' => $this->changeToTeks($value['pelatihan_survey_2']),
            'pelatihan_survey_3' => $this->changeToTeks($value['pelatihan_survey_3']),
            'pelatihan_survey_4' => $this->changeToTeks($value['pelatihan_survey_4']),
            'pelatihan_survey_5' => $this->changeToTeks($value['pelatihan_survey_5']),
            'pelatihan_survey_6' => $this->changeToTeks($value['pelatihan_survey_6']),
            'pelatihan_survey_7' => $this->changeToTeks($value['pelatihan_survey_7']),
            'tanggal_pendaftaran' => $value['tanggal_pendaftaran']
          ];
          array_push($arr_pelatihan, $tmp_arr);
        }
        $data['ListData'] = $arr_pelatihan;
        $this->mypdf->generate('admin/laporan/print/pelatihan', $data, 'laporan-responden', 'A4', 'landscape');
      }else if ( $jenis == 'Pengujian'){
        $tmp_arr = [];
        $arr_pengujian = [];
         $qry = "select * from laporan_pengujian where tanggal_pendaftaran BETWEEN '".$awal."' AND '".$akhir."'";
        $pengujian_qry = $this->db->query($qry)->result_array();

        foreach ($pengujian_qry as $key => $value) {
          $tmp_arr = [
            'nama' => $value['nama'],
            'pengujian_survey_1' => $this->changeToTeks($value['pengujian_survey_1']),
            'pengujian_survey_2' => $this->changeToTeks($value['pengujian_survey_2']),
            'pengujian_survey_3' => $this->changeToTeks($value['pengujian_survey_3']),
            'pengujian_survey_4' => $this->changeToTeks($value['pengujian_survey_4']),
            'pengujian_survey_5' => $this->changeToTeks($value['pengujian_survey_5']),
            'pengujian_survey_6' => $this->changeToTeks($value['pengujian_survey_6']),
            'pengujian_survey_7' => $this->changeToTeks($value['pengujian_survey_7']),
            'tanggal_pendaftaran' => $value['tanggal_pendaftaran']
          ];
          array_push($arr_pengujian, $tmp_arr);
        }
        $data['ListData'] = $arr_pengujian;
        $this->mypdf->generate('admin/laporan/print/pengujian', $data, 'laporan-responden', 'A4', 'landscape');
      }else if( $jenis == 'RancangBangun'){
        $tmp_arr = [];
        $arr_rancang = [];
         $qry = "select * from laporan_rancang where tanggal_pendaftaran BETWEEN '".$awal."' AND '".$akhir."'";
        $rancang_qry = $this->db->query($qry)->result_array();

        foreach ($rancang_qry as $key => $value) {
          $tmp_arr = [
            'nama' => $value['nama'],
            'rancang_survey_1' => $this->changeToTeks($value['rancang_survey_1']),
            'rancang_survey_2' => $this->changeToTeks($value['rancang_survey_2']),
            'rancang_survey_3' => $this->changeToTeks($value['rancang_survey_3']),
            'rancang_survey_4' => $this->changeToTeks($value['rancang_survey_4']),
            'rancang_survey_5' => $this->changeToTeks($value['rancang_survey_5']),
            'rancang_survey_6' => $this->changeToTeks($value['rancang_survey_6']),
            'rancang_survey_7' => $this->changeToTeks($value['rancang_survey_7']),
            'tanggal_pendaftaran' => $value['tanggal_pendaftaran']
          ];
          array_push($arr_rancang, $tmp_arr);
        }
        $data['ListData'] = $arr_rancang;
        $this->mypdf->generate('admin/laporan/print/rancang', $data, 'laporan-responden', 'A4', 'landscape');
      }
        
    }

    private function qry_semua_laporan(){
      $pelatihan = 'Pelatihan';
      $rancang = 'RancangBangun';
      $pengujian = 'Pengujian';
      $anjay = $this->laporan_model->get_all();
      $arr = [];
      foreach ($anjay as $key => $value) {
        if($value->jenis_jasa == $pelatihan){
            $tmp = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->pelatihan_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->pelatihan_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->pelatihan_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->pelatihan_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->pelatihan_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->pelatihan_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->pelatihan_survey_7)              
            ];
            array_push($arr, $tmp);
        }
        if($value->jenis_jasa == $pengujian){
          $tmp2 = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->pengujian_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->pengujian_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->pengujian_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->pengujian_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->pengujian_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->pengujian_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->pengujian_survey_7)
          ];
          array_push($arr, $tmp2);
        }
        if($value->jenis_jasa == $rancang){
          $tmp3 = [
              'nama' => $value->nama,
              'no_tlp' => $value->no_tlp,
              'nama_perusahaan' => $value->nama_perusahaan,
              'tanggal_pendaftaran' => $this->tanggal_indo($value->tanggal_pendaftaran),
              'jenis_jasa' => $value->jenis_jasa,
              'alamat' => $value->alamat,
              'pertanyaan_1' => $this->changeToTeks($value->rancang_survey_1),
              'pertanyaan_2' => $this->changeToTeks($value->rancang_survey_2),
              'pertanyaan_3' => $this->changeToTeks($value->rancang_survey_3),
              'pertanyaan_4' => $this->changeToTeks($value->rancang_survey_4),
              'pertanyaan_5' => $this->changeToTeks($value->rancang_survey_5),
              'pertanyaan_6' => $this->changeToTeks($value->rancang_survey_6),
              'pertanyaan_7' => $this->changeToTeks($value->rancang_survey_7)
          ];
          array_push($arr, $tmp3);
        }
      }
      return $arr;
    }
}
