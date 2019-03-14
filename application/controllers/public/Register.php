<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Public_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('register_model'); //call model
    }

    public function index() {

        $this->form_validation->set_rules('nama', 'nama','required');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('company_person', 'company_person','required');
        $this->form_validation->set_rules('jumlah_personal', 'jumlah_personal','required');
        $this->form_validation->set_rules('jenis_pelatihan', 'jenis_pelatihan','required');        
        $this->form_validation->set_rules('tanggal_event','tanggal_event','required');
        $this->form_validation->set_rules('pembayaran','pembayaran','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('public/register/index');
        }else{

            $data['nama']   =    $this->input->post('nama');
            $data['email']   =    $this->input->post('email');
            $data['company_person']   =    $this->input->post('company_person');
            $data['jumlah_personal']   =    $this->input->post('jumlah_personal');
            $data['jenis_pelatihan']   =    $this->input->post('jenis_pelatihan');
            $data['tanggal_event']  =    $this->input->post('tanggal_event');
            $data['pembayaran'] =    $this->input->post('pembayaran');

            $this->register_model->daftar($data);

            $pesan['message'] =    "Pendaftaran berhasil";

            $this->load->view('public/home/index',$pesan);
        }
    }
}
