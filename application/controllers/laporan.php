<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  public function index()
  {
  	
    $this->load->library('mypdf');
    $qry = 'select * from tb_responden ';
    $data['ListData'] = $this->db->query($qry)->result_array();
    $this->mypdf->generate('Laporan/dompdf', $data, 'laporan-responden', 'A4', 'landscape');
  }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */