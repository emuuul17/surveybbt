<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_Filter extends CI_Controller {

 public function index()
 {
  $data['title'] = "Cetak laporan berdasarkan filter data di PHP Codeigniter";
  $data['angkatan'] = $this->db->get('angkatan')->result();
  $this->load->view('laporan/filter', $data);  
 }

 public function filter($id)
 {
  if ($id == 0) {
   $data = $this->db->get('tb_mahasiswa')->result();
  }
  else
  {
   $data = $this->db->get_where('tb_mahasiswa', ['angkatan_id'=>$id])->result();
  }
  $dt['mahasiswa'] = $data;
  $dt['angkatan_id'] = $id;
  $this->load->view('laporan/result', $dt);
 }

 public function cetak($id)
 {
  if ($id == 0) {
   $data = $this->db->get('tb_mahasiswa')->result();
  }
  else
  {
   $data = $this->db->get_where('tb_mahasiswa', ['angkatan_id'=>$id])->result();
  }
  $dt['mahasiswa'] = $data;
  $this->load->library('mypdf');
  $this->mypdf->generate('Laporan/cetak', $dt, 'laporan-mahasiswa', 'A4', 'portrait');
 }

}