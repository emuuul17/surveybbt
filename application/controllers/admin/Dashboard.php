<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
	function __construct(){
			parent::__construct();

			// check login
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}
		}

	public function index()
	{
		$varpelatihan = "Pelatihan";
		$varpengujian = "Pengujian";
		$varrancang = "RancangBangun";
		$pelatihan = $this->laporan_model->getjenis_jasa($varpelatihan);
		$pengujian = $this->laporan_model->getjenis_jasa($varpengujian);
		$rancang = $this->laporan_model->getjenis_jasa($varrancang);
		$kesimpulan_pengujian = $this->laporanpengujian_model->get_all();
		$kesimpulan_pelatihan = $this->laporanpelatihan_model->get_all();
		$kesimpulan_rancang = $this->laporanrancang_model->get_all();
		$counter_pengujian = count($kesimpulan_pengujian);
		$counter_pelatihan = count($kesimpulan_pelatihan);
		$counter_rancang = count($kesimpulan_rancang);
		$hitung_pengujian = [];
		$hitung_pelatihan = [];
		$hitung_rancang = [];
		$tmp_pengujian = 0;
		$tmp_pelatihan = 0;
		$tmp_rancang = 0;

		foreach ($kesimpulan_pengujian as $key => $value) {
     	$tmp_nilai = (float) round(($value->pengujian_survey_1 + $value->pengujian_survey_2 + $value->pengujian_survey_3 + $value->pengujian_survey_4 + $value->pengujian_survey_5 + $value->pengujian_survey_6 + $value->pengujian_survey_7) / 7, 1);
     	$tmp_pengujian += $tmp_nilai;
     	$hitung_pengujian = $tmp_pengujian;
     	}

     	foreach ($kesimpulan_pelatihan as $key => $value) {
     	$tmp_nilai_2 = (float) round(($value->pelatihan_survey_1 + $value->pelatihan_survey_2 + $value->pelatihan_survey_3 + $value->pelatihan_survey_4 + $value->pelatihan_survey_5 + $value->pelatihan_survey_6 + $value->pelatihan_survey_7) / 7, 1);
     	$tmp_pelatihan += $tmp_nilai_2;
     	$hitung_pelatihan = $tmp_pelatihan;
     	}

     	foreach ($kesimpulan_rancang as $key => $value) {
     	$tmp_nilai_3 = (float) round(($value->rancang_survey_1 + $value->rancang_survey_2 + $value->rancang_survey_3 + $value->rancang_survey_4 + $value->rancang_survey_5 + $value->rancang_survey_6 + $value->rancang_survey_7) / 7, 1);
     	$tmp_rancang += $tmp_nilai_3;
     	$hitung_rancang = $tmp_rancang;
     	}

		$data['tb_responden'] = $this->db->count_all('tb_responden');
		$data['pelatihan1'] = $this->db->count_all('unsur_pelatihan');
		$data['pengujian1'] = $this->db->count_all('unsur_pengujian');
		$data['rancang1'] = $this->db->count_all('unsur_rancang');
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
	              'tanggal_pendaftaran' => $value->tanggal_pendaftaran,
	              'jenis_jasa' => $value->jenis_jasa,
	              'alamat' => $value->alamat,
	              'pertanyaan_1' => $value->pelatihan_survey_1,
	              'pertanyaan_2' => $value->pelatihan_survey_2,
	              'pertanyaan_3' => $value->pelatihan_survey_3,
	              'pertanyaan_4' => $value->pelatihan_survey_4,
	              'pertanyaan_5' => $value->pelatihan_survey_5,
	              'pertanyaan_6' => $value->pelatihan_survey_6,
	              'pertanyaan_7' => $value->pelatihan_survey_7              
	            ];
	            array_push($arr, $tmp);
	            $counter = count($tmp);
	        }
	        if($value->jenis_jasa == $pengujian){
	          $tmp2 = [
	              'nama' => $value->nama,
	              'no_tlp' => $value->no_tlp,
	              'nama_perusahaan' => $value->nama_perusahaan,
	              'tanggal_pendaftaran' => $value->tanggal_pendaftaran,
	              'jenis_jasa' => $value->jenis_jasa,
	              'alamat' => $value->alamat,
	              'pertanyaan_1' => $value->pengujian_survey_1,
	              'pertanyaan_2' => $value->pengujian_survey_2,
	              'pertanyaan_3' => $value->pengujian_survey_3,
	              'pertanyaan_4' => $value->pengujian_survey_4,
	              'pertanyaan_5' => $value->pengujian_survey_5,
	              'pertanyaan_6' => $value->pengujian_survey_6,
	              'pertanyaan_7' => $value->pengujian_survey_7
	          ];
	          array_push($arr, $tmp2);
	        }
	        if($value->jenis_jasa == $rancang){
	          $tmp3 = [
	              'nama' => $value->nama,
	              'no_tlp' => $value->no_tlp,
	              'nama_perusahaan' => $value->nama_perusahaan,
	              'tanggal_pendaftaran' => $value->tanggal_pendaftaran,
	              'jenis_jasa' => $value->jenis_jasa,
	              'alamat' => $value->alamat,
	              'pertanyaan_1' => $value->rancang_survey_1,
	              'pertanyaan_2' => $value->rancang_survey_2,
	              'pertanyaan_3' => $value->rancang_survey_3,
	              'pertanyaan_4' => $value->rancang_survey_4,
	              'pertanyaan_5' => $value->rancang_survey_5,
	              'pertanyaan_6' => $value->rancang_survey_6,
	              'pertanyaan_7' => $value->rancang_survey_7
	          ];
	          array_push($arr, $tmp3);
	        }
	      }

	      $akhir_pengujian = (int) $hitung_pengujian / $counter_pengujian;
	      $akhir_pelatihan = (int) $hitung_pelatihan / $counter_pelatihan;
	      $akhir_rancang = (int) $hitung_rancang / $counter_rancang;

	      $ket_pengujian = $this->getKesimpulan($akhir_pengujian);
	      $ket_pelatihan = $this->getKesimpulan($akhir_pelatihan);
	      $ket_rancang = $this->getKesimpulan($akhir_rancang);

	      $kesimpulan_akhir_pengujian = [
	      	'jenis' => 'Pengujian',
	      	'nilai' => $hitung_pengujian,
	      	'akhir' => $akhir_pengujian,
	      	'keterangan' => $ket_pengujian
	      ]; 

	      $kesimpulan_akhir_pelatihan = [
	      	'jenis' => 'Pelatihan',
	      	'nilai' => $hitung_pelatihan,
	      	'akhir' => $akhir_pelatihan,
	      	'keterangan' => $ket_pelatihan
	      ]; 

	      $kesimpulan_akhir_rancang = [
	      	'jenis' => 'Rancang Bangun',
	      	'nilai' => $hitung_rancang,
	      	'akhir' => $akhir_rancang,
	      	'keterangan' => $ket_rancang
	      ];

	      $data['laporan'] = $arr;
	      $data['laporan_pengujian'] = $kesimpulan_akhir_pengujian;
	      $data['laporan_pelatihan'] = $kesimpulan_akhir_pelatihan;
	      $data['laporan_rancang'] = $kesimpulan_akhir_rancang;

		$this->template->load('admin', 'default', 'dashboard', $data);
		
	}

	private function getKesimpulan($data)
	{
		$akhir = '';
		if($data >= 1.00 && $data < 1.80){
     		$akhir = 'Tidak Puas';
     	}elseif($data >= 1.80 && $data < 2.60){
     		$akhir ='Kurang Puas';
     	}elseif ($data >= 2.60 && $data < 3.40){
     		$akhir = 'Cukup Puas';
     	}elseif ($data >= 3.40 && $data < 4.20) {
     		$akhir = 'Puas';
     	}elseif ($data >= 4.20) {
     		$akhir = 	'Sangat Puas';
     	}

     	return $akhir;
	}


}