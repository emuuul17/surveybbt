<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form'));
        $this->load->model('register_model'); //call model
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');
        $this->form_validation->set_rules('provinsi', 'provinsi', 'required');
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required');
        $this->form_validation->set_rules('jenis_jasa', 'jenis_jasa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('public/register/index');
        } else {
            
            $data['nama']   =    $this->input->post('nama');
            $data['jenis_kelamin']   =    $this->input->post('jenis_kelamin');
            $data['nama_perusahaan']   =    $this->input->post('nama_perusahaan');
            $data['alamat']   =    $this->input->post('alamat');
            $data['kota']   =    $this->input->post('kota');
            $data['provinsi']   =    $this->input->post('provinsi');
            $data['no_tlp']   =    $this->input->post('no_tlp');
            $data['jenis_jasa']   =    $this->input->post('jenis_jasa');
            $tanggal = date('Y-m-d', strtotime("now"));
            $data['tanggal']  =    $tanggal;
    
            $getRegisterId = $this->Register_model->add($data);
            $jenis = $this->input->post('jenis_jasa');
            // var_dump($save);die;
            // $data['registerId'] = $getRegisterId;

            $this->getSurvey($getRegisterId, $jenis);

            // $pesan['message'] ="Pendaftaran berhasil";

            // redirect('public/register/index');

            // $this->template->load('public', 'default', 'register/index', $data);
        }
    }

    private function getSurvey($id, $jenis)
    {
         $Pelatihan = 'Pelatihan';
         $Rancang = 'RancangBangun';
         $Pengujian = 'Pengujian';

        if($jenis == $Pelatihan){
            $data['id'] = $id;
            $data['jenis'] = $jenis;
            $data['pelatihan'] = $this->Pelatihan_model->get_all();
            // $this->template->load('public', 'default', 'survey/pelatihan', $data);
            $this->load->view('public/survey/pelatihan', $data);
        }
        if($jenis == $Rancang){
            $data['id'] = $id;
            $data['jenis'] = $jenis;
            $data['rancang'] = $this->Rancang_model->get_all();

            // $this->template->load('public', 'default', 'survey/rancang', $data);
            $this->load->view('public/survey/rancang', $data);

        }
        if($jenis == $Pengujian){
            $data['id'] = $id;
            $data['jenis'] = $jenis;
            $data['pengujian'] = $this->Pengujian_model->get_all();

           $this->load->view('public/survey/pengujian', $data);
        }
    }

    public function save($pelanggan, $jenis)
    {
         $Pelatihan = 'Pelatihan';
         $Rancang = 'RancangBangun';
         $Pengujian = 'Pengujian';

         if($jenis == $Pelatihan){
                $data['id_pelanggan'] = (int) $pelanggan;
                $data['unsur_1']   =    $this->input->post('radio-1');
                $data['unsur_2']   =    $this->input->post('radio-2');
                $data['unsur_3']   =    $this->input->post('radio-3');
                $data['unsur_4']   =    $this->input->post('radio-4');
                $data['unsur_5']   =    $this->input->post('radio-5');
                $data['unsur_6']   =    $this->input->post('radio-6');
                $data['unsur_7']   =    $this->input->post('radio-7');
                $tanggal = date('Y-m-d', strtotime("now"));
                $data['tanggal']  =    $tanggal;

                $save = $this->Unsurpelatihan_model->add($data);
                redirect('public/register/index');
        }
        if($jenis == $Rancang){
            $data['id_pelanggan'] = (int) $pelanggan;
            $data['unsur_1']   =    $this->input->post('radio-1');
            $data['unsur_2']   =    $this->input->post('radio-2');
            $data['unsur_3']   =    $this->input->post('radio-3');
            $data['unsur_4']   =    $this->input->post('radio-4');
            $data['unsur_5']   =    $this->input->post('radio-5');
            $data['unsur_6']   =    $this->input->post('radio-6');
            $data['unsur_7']   =    $this->input->post('radio-7');
            $tanggal = date('Y-m-d', strtotime("now"));
            $data['tanggal']  =    $tanggal;

            $save = $this->Unsurrancang_model->add($data);
            redirect('public/register/index');
        }
        if($jenis == $Pengujian){
            $data['id_pelanggan'] = (int) $pelanggan;
            $data['unsur_1']   =    $this->input->post('radio-1');
            $data['unsur_2']   =    $this->input->post('radio-2');
            $data['unsur_3']   =    $this->input->post('radio-3');
            $data['unsur_4']   =    $this->input->post('radio-4');
            $data['unsur_5']   =    $this->input->post('radio-5');
            $data['unsur_6']   =    $this->input->post('radio-6');
            $data['unsur_7']   =    $this->input->post('radio-7');
            $tanggal = date('Y-m-d', strtotime("now"));
            $data['tanggal']  =    $tanggal;

            $save = $this->Unsurpengujian_model->add($data);
            redirect('public/register/index');
        }

    }

}
