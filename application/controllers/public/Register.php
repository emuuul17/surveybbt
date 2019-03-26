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
            $sender= $this->input->post('email');
            $subject= $this->input->post('jenis_pelatihan') .' '.$this->input->post('company_person');
            $message= 'Jumlah personal yang mengikuti pelatihan berjumlah :'.$this->input->post('jumlah_personal') .'<br> Pada Tanggal '.$this->input->post('tanggal_event') .'<br> Jenis Pembyaran '.$this->input->post('pembayaran');

            $data['nama']   =    $this->input->post('nama');
            $data['email']   =    $this->input->post('email');
            $data['company_person']   =    $this->input->post('company_person');
            $data['jumlah_personal']   =    $this->input->post('jumlah_personal');
            $data['jenis_pelatihan']   =    $this->input->post('jenis_pelatihan');
            $data['tanggal_event']  =    $this->input->post('tanggal_event');
            $data['pembayaran'] =    $this->input->post('pembayaran');

            $this->kirim_email($sender, $subject, $message);

            // $this->send_email();


            $this->register_model->daftar($data);

            $pesan['message'] =    "Pendaftaran berhasil";

            redirect('home/index');
    }
}

    public function kirim_email($email, $subject, $message) {
        $from_email = $email;
        $to_email = "nurikhsan175@gmail.com";
            //Load email library
            $this->load->library('email');
            $this->email->from($from_email);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);

             // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            return true;

        } else {
            redirect('public/register/index');
        }
    }

    public function send_email() {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.mailgun.org',
            'smtp_user' => 'postmaster@sandbox66386da546e4423b9ee1c1a01f7aeb6a.mailgun.org',    // Ganti dengan email gmail kamu
            'smtp_pass' => '08dc71e9c931f36c2dcca226a58e4f3c-985b58f4-4d5bc7e7',      // Password gmail kamu
            'smtp_port' => 465,
            'crlf'      => "\r\n",
            'newline'   => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@masrud.com', 'MasRud.com | M. Rudianto');

        // Email penerima
        $this->email->to('nurikhsan175@gmail.com'); // Ganti dengan email tujuan kamu

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email CodeIgniter yang dikirim menggunakan SMTP email Google (Gmail).<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}


