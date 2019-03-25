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

            $data['nama']   =    $this->input->post('nama');
            $data['email']   =    $this->input->post('email');
            $data['company_person']   =    $this->input->post('company_person');
            $data['jumlah_personal']   =    $this->input->post('jumlah_personal');
            $data['jenis_pelatihan']   =    $this->input->post('jenis_pelatihan');
            $data['tanggal_event']  =    $this->input->post('tanggal_event');
            $data['pembayaran'] =    $this->input->post('pembayaran');

            $this->kirim_email($sender);

            $this->register_model->daftar($data);

            $pesan['message'] =    "Pendaftaran berhasil";
            redirect('home/index');
        }
    }

    public function kirim_email($email) {
        $from_email = $email;
        $to_email = "rive99erlangga@gmail.com";
            //Load email library
            $this->load->library('email');
            $this->email->from($from_email, 'coba.com');
            $this->email->to($to_email);
            $this->email->subject('Kirim Email Codeigniter');
            $this->email->message('Anda menerima pesan ini karena sudah mengirimkan email dari codeigniter');

            return true;
    }

    public function send_email() {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.mailgun.org',
            'smtp_user' => 'postmaster@sandboxb109992dbdaa4c31b545e69101c6b46f.mailgun.org',    // Ganti dengan email gmail kamu
            'smtp_pass' => 'f9d93c029f81b4f9fa1fef8d3e60798e-3939b93a-e8919f99',      // Password gmail kamu
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


