<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasilsurvey extends Admin_Controller {
	function __construct(){
			parent::__construct();
			   $this->load->library('pagination');
              $this->load->library('mypdf');
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
		}

	public function pengujian()
	{
		$semua = $this->laporanpengujian_model->get_all();
		$qry = 'select * from laporan_pengujian ';
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
     $coba = $this->db->query($qry)->result_array();
     $data['hasil'] = $semua;
     $hitung = [];
     $akhir = [];

     foreach ($semua as $key => $value) {
     	$tmp_nilai = (float) round(($value->pengujian_survey_1 + $value->pengujian_survey_2 + $value->pengujian_survey_3 + $value->pengujian_survey_4 + $value->pengujian_survey_5 + $value->pengujian_survey_6 + $value->pengujian_survey_7) / 7, 1);
     	if($tmp_nilai >= 1.00 && $tmp_nilai < 1.80){
     		$tmp_kesmpulan = 'Tidak Puas';
     	}elseif($tmp_nilai >= 1.80 && $tmp_nilai < 2.60){
     		$tmp_kesmpulan ='Kurang Puas';
     	}elseif ($tmp_nilai >= 2.60 && $tmp_nilai < 3.40){
     		$tmp_kesmpulan = 'Cukup Puas';
     	}elseif ($tmp_nilai >= 3.40 && $tmp_nilai < 4.20) {
     		$tmp_kesmpulan = 'Puas';
     	}elseif ($tmp_nilai >= 4.20) {
     		$tmp_kesmpulan = 	'Sangat Puas';
     	}
     	$hitung_tmp = [
     		'id' => $value->id,
     		'nama' => $value->nama,
     		'pengujian_survey_1' => $value->pengujian_survey_1,
     		'pengujian_survey_2' => $value->pengujian_survey_2,
     		'pengujian_survey_3' => $value->pengujian_survey_3,
     		'pengujian_survey_4' => $value->pengujian_survey_4,
     		'pengujian_survey_5' => $value->pengujian_survey_5,
     		'pengujian_survey_6' => $value->pengujian_survey_6,
     		'pengujian_survey_7' => $value->pengujian_survey_7,
     		'nilai' => $tmp_nilai,
     		'kesimpulan' => $tmp_kesmpulan
     	];
     	array_push($hitung, $hitung_tmp);
     }
     	$data['ListData'] = $hitung;

		$this->template->load('admin', 'default', 'hasil_survey/hasil_pengujian/index', $data);
	}

	public function rancang()
	{
		$semua = $this->laporanrancang_model->get_all();
		$qry = 'select * from laporan_rancang ';
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
      $config['base_url']        = base_url().'admin/pertanyaan/rancang';

	$this->pagination->initialize($config);

     $data['paginglinks']       = $this->pagination->create_links();
     $data['per_page']          = $this->uri->segment(5);
     $data['offset']            = $offset;
      if($data['paginglinks']!= '') {
        $data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->db->query($qry)->num_rows();
      }
     $qry .= " limit {$per_page} offset {$offset} ";
     $coba = $this->db->query($qry)->result_array();
     $data['hasil'] = $semua;
     $hitung = [];
     $akhir = [];

     foreach ($semua as $key => $value) {
     	$tmp_nilai = (float) round(($value->rancang_survey_1 + $value->rancang_survey_2 + $value->rancang_survey_3 + $value->rancang_survey_4 + $value->rancang_survey_5 + $value->rancang_survey_6 + $value->rancang_survey_7) / 7, 1);
     	if($tmp_nilai >= 1.00 && $tmp_nilai < 1.80){
     		$tmp_kesmpulan = 'Tidak Puas';
     	}elseif($tmp_nilai >= 1.80 && $tmp_nilai < 2.60){
     		$tmp_kesmpulan ='Kurang Puas';
     	}elseif ($tmp_nilai >= 2.60 && $tmp_nilai < 3.40){
     		$tmp_kesmpulan = 'Cukup Puas';
     	}elseif ($tmp_nilai >= 3.40 && $tmp_nilai < 4.20) {
     		$tmp_kesmpulan = 'Puas';
     	}elseif ($tmp_nilai >= 4.20) {
     		$tmp_kesmpulan = 	'Sangat Puas';
     	}
     	$hitung_tmp = [
     		'id' => $value->id,
     		'nama' => $value->nama,
     		'rancang_survey_1' => $value->rancang_survey_1,
     		'rancang_survey_2' => $value->rancang_survey_2,
     		'rancang_survey_3' => $value->rancang_survey_3,
     		'rancang_survey_4' => $value->rancang_survey_4,
     		'rancang_survey_5' => $value->rancang_survey_5,
     		'rancang_survey_6' => $value->rancang_survey_6,
     		'rancang_survey_7' => $value->rancang_survey_7,
     		'nilai' => $tmp_nilai,
     		'kesimpulan' => $tmp_kesmpulan
     	];
     	array_push($hitung, $hitung_tmp);
     }
     	$data['ListData'] = $hitung;

		$this->template->load('admin', 'default', 'hasil_survey/hasil_rancang/index', $data);
	}

	public function pelatihan()
	{
		$semua = $this->laporanpelatihan_model->get_all();
		$qry = 'select * from laporan_pelatihan ';
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
     $coba = $this->db->query($qry)->result_array();
     $data['hasil'] = $semua;
     $hitung = [];
     $akhir = [];

     foreach ($semua as $key => $value) {
     	$tmp_nilai = (float) round(($value->pelatihan_survey_1 + $value->pelatihan_survey_2 + $value->pelatihan_survey_3 + $value->pelatihan_survey_4 + $value->pelatihan_survey_5 + $value->pelatihan_survey_6 + $value->pelatihan_survey_7) / 7, 1);
     	if($tmp_nilai >= 1.00 && $tmp_nilai < 1.80){
     		$tmp_kesmpulan = 'Tidak Puas';
     	}elseif($tmp_nilai >= 1.80 && $tmp_nilai < 2.60){
     		$tmp_kesmpulan ='Kurang Puas';
     	}elseif ($tmp_nilai >= 2.60 && $tmp_nilai < 3.40){
     		$tmp_kesmpulan = 'Cukup Puas';
     	}elseif ($tmp_nilai >= 3.40 && $tmp_nilai < 4.20) {
     		$tmp_kesmpulan = 'Puas';
     	}elseif ($tmp_nilai >= 4.20) {
     		$tmp_kesmpulan = 	'Sangat Puas';
     	}
     	$hitung_tmp = [
     		'id' => $value->id,
     		'nama' => $value->nama,
     		'pelatihan_survey_1' => $value->pelatihan_survey_1,
     		'pelatihan_survey_2' => $value->pelatihan_survey_2,
     		'pelatihan_survey_3' => $value->pelatihan_survey_3,
     		'pelatihan_survey_4' => $value->pelatihan_survey_4,
     		'pelatihan_survey_5' => $value->pelatihan_survey_5,
     		'pelatihan_survey_6' => $value->pelatihan_survey_6,
     		'pelatihan_survey_7' => $value->pelatihan_survey_7,
     		'nilai' => $tmp_nilai,
     		'kesimpulan' => $tmp_kesmpulan
     	];
     	array_push($hitung, $hitung_tmp);
     }
     	$data['ListData'] = $hitung;

		$this->template->load('admin', 'default', 'hasil_survey/hasil_pelatihan/index', $data);
	}

  public function cari_pengujian()
  {
    $status = $this->uri->segment(4,0);
       if($status == 'null'){
        $status = '';
      }
    $data['ListData'] = $this->data_pengujian($status);
    $this->load->view('admin/hasil_survey/hasil_pengujian/show',$data);
  }

  public function cetak_pengujian()
  {
    $status = $this->uri->segment(4,0);
       if($status == 'null'){
        $status = '';
      }

    $data['ListData'] = $this->data_pengujian($status);
      $this->mypdf->generate('admin/hasil_survey/hasil_pengujian/cetak', $data, 'laporan-responden', 'A4', 'landscape');
  }

  public function cari_pelatihan()
  {
    $status = $this->uri->segment(4,0);
       if($status == 'null'){
        $status = '';
      }
    $data['ListData'] = $this->data_pelatihan($status);
    $this->load->view('admin/hasil_survey/hasil_pelatihan/show',$data);
  }

  public function cetak_pelatihan()
  {
    $status = $this->uri->segment(4,0);
       if($status == 'null'){
        $status = '';
      }

    $data['ListData'] = $this->data_pelatihan($status);
      $this->mypdf->generate('admin/hasil_survey/hasil_pelatihan/cetak', $data, 'laporan-responden', 'A4', 'landscape');
  }

  public function cari_rancang()
  {
    $status = $this->uri->segment(4,0);
       if($status == 'null'){
        $status = '';
      }
    $data['ListData'] = $this->data_rancang($status);
    $this->load->view('admin/hasil_survey/hasil_rancang/show',$data);
  }

  public function cetak_rancang()
  {
    $status = $this->uri->segment(4,0);
       if($status == 'null'){
        $status = '';
      }

    $data['ListData'] = $this->data_rancang($status);
      $this->mypdf->generate('admin/hasil_survey/hasil_rancang/cetak', $data, 'laporan-responden', 'A4', 'landscape');
  }

    private function data_pengujian($status)
  {
      $semua = $this->laporanpengujian_model->get_all();
     $hitung = [];
     $akhir = [];

     foreach ($semua as $key => $value) {
      $tmp_nilai = (float) round(($value->pengujian_survey_1 + $value->pengujian_survey_2 + $value->pengujian_survey_3 + $value->pengujian_survey_4 + $value->pengujian_survey_5 + $value->pengujian_survey_6 + $value->pengujian_survey_7) / 7, 1);
      if($tmp_nilai >= 1.00 && $tmp_nilai < 1.80){
        $tmp_kesmpulan = 'Tidak Puas';
        $tmp_status = 'tidakpuas';
      }elseif($tmp_nilai >= 1.80 && $tmp_nilai < 2.60){
        $tmp_kesmpulan ='Kurang Puas';
        $tmp_status = 'kurangpuas';
      }elseif ($tmp_nilai >= 2.60 && $tmp_nilai < 3.40){
        $tmp_kesmpulan = 'Cukup Puas';
        $tmp_status = 'cukuppuas';
      }elseif ($tmp_nilai >= 3.40 && $tmp_nilai < 4.20) {
        $tmp_kesmpulan = 'Puas';
        $tmp_status = 'puas';
      }elseif ($tmp_nilai >= 4.20) {
        $tmp_kesmpulan =  'Sangat Puas';
        $tmp_status = 'sangatpuas';
      }
      $hitung_tmp = [
        'id' => $value->id,
        'nama' => $value->nama,
        'pengujian_survey_1' => $value->pengujian_survey_1,
        'pengujian_survey_2' => $value->pengujian_survey_2,
        'pengujian_survey_3' => $value->pengujian_survey_3,
        'pengujian_survey_4' => $value->pengujian_survey_4,
        'pengujian_survey_5' => $value->pengujian_survey_5,
        'pengujian_survey_6' => $value->pengujian_survey_6,
        'pengujian_survey_7' => $value->pengujian_survey_7,
        'nilai' => $tmp_nilai,
        'kesimpulan' => $tmp_kesmpulan,
        'status' => $tmp_status
      ];
      array_push($hitung, $hitung_tmp);
     }

     foreach ($hitung as $key => $value) {
      if($status){
        if($status == $value['status']){
              $akhir_tmp = [
                'id' => $value['id'],
                'nama' => $value['nama'],
                'pengujian_survey_1' => $value['pengujian_survey_1'],
                'pengujian_survey_2' => $value['pengujian_survey_2'],
                'pengujian_survey_3' => $value['pengujian_survey_3'],
                'pengujian_survey_4' => $value['pengujian_survey_4'],
                'pengujian_survey_5' => $value['pengujian_survey_5'],
                'pengujian_survey_6' => $value['pengujian_survey_6'],
                'pengujian_survey_7' => $value['pengujian_survey_7'],
                'nilai' => $value['nilai'],
                'kesimpulan' => $value['kesimpulan']
             ];
            array_push($akhir, $akhir_tmp);
         }
      }else{
         $akhir_tmp = [
              'id' => $value['id'],
              'nama' => $value['nama'],
              'pengujian_survey_1' => $value['pengujian_survey_1'],
              'pengujian_survey_2' => $value['pengujian_survey_2'],
              'pengujian_survey_3' => $value['pengujian_survey_3'],
              'pengujian_survey_4' => $value['pengujian_survey_4'],
              'pengujian_survey_5' => $value['pengujian_survey_5'],
              'pengujian_survey_6' => $value['pengujian_survey_6'],
              'pengujian_survey_7' => $value['pengujian_survey_7'],
              'nilai' => $value['nilai'],
              'kesimpulan' => $value['kesimpulan']
           ];
          array_push($akhir, $akhir_tmp);
       }
     }

     return $akhir;
  }

  private function data_rancang($status)
  {
    $semua = $this->laporanrancang_model->get_all(); 
    $hitung = [];
    $akhir = [];

    foreach ($semua as $key => $value) {
      $tmp_nilai = (float) round(($value->rancang_survey_1 + $value->rancang_survey_2 + $value->rancang_survey_3 + $value->rancang_survey_4 + $value->rancang_survey_5 + $value->rancang_survey_6 + $value->rancang_survey_7) / 7, 1);
     if($tmp_nilai >= 1.00 && $tmp_nilai < 1.80){
        $tmp_kesmpulan = 'Tidak Puas';
        $tmp_status = 'tidakpuas';
      }elseif($tmp_nilai >= 1.80 && $tmp_nilai < 2.60){
        $tmp_kesmpulan ='Kurang Puas';
        $tmp_status = 'kurangpuas';
      }elseif ($tmp_nilai >= 2.60 && $tmp_nilai < 3.40){
        $tmp_kesmpulan = 'Cukup Puas';
        $tmp_status = 'cukuppuas';
      }elseif ($tmp_nilai >= 3.40 && $tmp_nilai < 4.20) {
        $tmp_kesmpulan = 'Puas';
        $tmp_status = 'puas';
      }elseif ($tmp_nilai >= 4.20) {
        $tmp_kesmpulan =  'Sangat Puas';
        $tmp_status = 'sangatpuas';
      }
      $hitung_tmp = [
        'id' => $value->id,
        'nama' => $value->nama,
        'rancang_survey_1' => $value->rancang_survey_1,
        'rancang_survey_2' => $value->rancang_survey_2,
        'rancang_survey_3' => $value->rancang_survey_3,
        'rancang_survey_4' => $value->rancang_survey_4,
        'rancang_survey_5' => $value->rancang_survey_5,
        'rancang_survey_6' => $value->rancang_survey_6,
        'rancang_survey_7' => $value->rancang_survey_7,
        'nilai' => $tmp_nilai,
        'kesimpulan' => $tmp_kesmpulan,
        'status' => $tmp_status
      ];
      array_push($hitung, $hitung_tmp);
     }

      foreach ($hitung as $key => $value) {
      if($status){
        if($status == $value['status']){
              $akhir_tmp = [
                  'id' => $value['id'],
                  'nama' => $value['nama'],
                  'rancang_survey_1' => $value['rancang_survey_1'],
                  'rancang_survey_2' => $value['rancang_survey_2'],
                  'rancang_survey_3' => $value['rancang_survey_3'],
                  'rancang_survey_4' => $value['rancang_survey_4'],
                  'rancang_survey_5' => $value['rancang_survey_5'],
                  'rancang_survey_6' => $value['rancang_survey_6'],
                  'rancang_survey_7' => $value['rancang_survey_7'],
                  'nilai' => $value['nilai'],
                  'kesimpulan' => $value['kesimpulan']
             ];
            array_push($akhir, $akhir_tmp);
         }
      }else{
         $akhir_tmp = [
                  'id' => $value['id'],
                  'nama' => $value['nama'],
                  'rancang_survey_1' => $value['rancang_survey_1'],
                  'rancang_survey_2' => $value['rancang_survey_2'],
                  'rancang_survey_3' => $value['rancang_survey_3'],
                  'rancang_survey_4' => $value['rancang_survey_4'],
                  'rancang_survey_5' => $value['rancang_survey_5'],
                  'rancang_survey_6' => $value['rancang_survey_6'],
                  'rancang_survey_7' => $value['rancang_survey_7'],
                  'nilai' => $value['nilai'],
                  'kesimpulan' => $value['kesimpulan']
           ];
          array_push($akhir, $akhir_tmp);
       }
     }

     return $akhir;
  }

  private function data_pelatihan($status)
  {
    $semua = $this->laporanpelatihan_model->get_all();
    $hitung = [];
    $akhir = [];

    foreach ($semua as $key => $value) {
      $tmp_nilai = (float) round(($value->pelatihan_survey_1 + $value->pelatihan_survey_2 + $value->pelatihan_survey_3 + $value->pelatihan_survey_4 + $value->pelatihan_survey_5 + $value->pelatihan_survey_6 + $value->pelatihan_survey_7) / 7, 1);
      if($tmp_nilai >= 1.00 && $tmp_nilai < 1.80){
        $tmp_kesmpulan = 'Tidak Puas';
        $tmp_status = 'tidakpuas';
      }elseif($tmp_nilai >= 1.80 && $tmp_nilai < 2.60){
        $tmp_kesmpulan ='Kurang Puas';
        $tmp_status = 'kurangpuas';
      }elseif ($tmp_nilai >= 2.60 && $tmp_nilai < 3.40){
        $tmp_kesmpulan = 'Cukup Puas';
        $tmp_status = 'cukuppuas';
      }elseif ($tmp_nilai >= 3.40 && $tmp_nilai < 4.20) {
        $tmp_kesmpulan = 'Puas';
        $tmp_status = 'puas';
      }elseif ($tmp_nilai >= 4.20) {
        $tmp_kesmpulan =  'Sangat Puas';
        $tmp_status = 'sangatpuas';
      }
      $hitung_tmp = [
        'id' => $value->id,
        'nama' => $value->nama,
        'pelatihan_survey_1' => $value->pelatihan_survey_1,
        'pelatihan_survey_2' => $value->pelatihan_survey_2,
        'pelatihan_survey_3' => $value->pelatihan_survey_3,
        'pelatihan_survey_4' => $value->pelatihan_survey_4,
        'pelatihan_survey_5' => $value->pelatihan_survey_5,
        'pelatihan_survey_6' => $value->pelatihan_survey_6,
        'pelatihan_survey_7' => $value->pelatihan_survey_7,
        'nilai' => $tmp_nilai,
        'kesimpulan' => $tmp_kesmpulan,
        'status' => $tmp_status
      ];
      array_push($hitung, $hitung_tmp);
     }

     foreach ($hitung as $key => $value) {
      if($status){
        if($status == $value['status']){
              $akhir_tmp = [
                  'id' => $value['id'],
                  'nama' => $value['nama'],
                  'pelatihan_survey_1' => $value['pelatihan_survey_1'],
                  'pelatihan_survey_2' => $value['pelatihan_survey_2'],
                  'pelatihan_survey_3' => $value['pelatihan_survey_3'],
                  'pelatihan_survey_4' => $value['pelatihan_survey_4'],
                  'pelatihan_survey_5' => $value['pelatihan_survey_5'],
                  'pelatihan_survey_6' => $value['pelatihan_survey_6'],
                  'pelatihan_survey_7' => $value['pelatihan_survey_7'],
                  'nilai' => $value['nilai'],
                  'kesimpulan' => $value['kesimpulan']
             ];
            array_push($akhir, $akhir_tmp);
         }
      }else{
         $akhir_tmp = [
                  'id' => $value['id'],
                  'nama' => $value['nama'],
                  'pelatihan_survey_1' => $value['pelatihan_survey_1'],
                  'pelatihan_survey_2' => $value['pelatihan_survey_2'],
                  'pelatihan_survey_3' => $value['pelatihan_survey_3'],
                  'pelatihan_survey_4' => $value['pelatihan_survey_4'],
                  'pelatihan_survey_5' => $value['pelatihan_survey_5'],
                  'pelatihan_survey_6' => $value['pelatihan_survey_6'],
                  'pelatihan_survey_7' => $value['pelatihan_survey_7'],
                  'nilai' => $value['nilai'],
                  'kesimpulan' => $value['kesimpulan']
           ];
          array_push($akhir, $akhir_tmp);
       }
     }
     return $akhir;
  }
	
}