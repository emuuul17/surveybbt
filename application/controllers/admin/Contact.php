<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('datatables'); //load library ignited-dataTable
      }

    public function index()
	{
		// check login
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}
		$data['kontak'] = $this->Contact_model->get_all();
		// load template
		$this->template->load('admin', 'default', 'contact/index', $data);
    }

    function simpan()
    { //function simpan data
        $data=array(
          'barang_kode'     => $this->input->post('kode_barang'),
          'barang_nama'     => $this->input->post('nama_barang'),
          'barang_harga'    => $this->input->post('harga'),
          'barang_kategori_id' => $this->input->post('kategori')
        );
        $this->db->insert('barang', $data);
        redirect('admin/contact');
      }
     
      function update()
      { //function update data
        $kode=$this->input->post('kode_barang');
        $data=array(
          'barang_nama'     => $this->input->post('nama_barang'),
          'barang_harga'    => $this->input->post('harga'),
          'barang_kategori_id' => $this->input->post('kategori')
        );
        $this->db->where('barang_kode',$kode);
        $this->db->update('barang', $data);
        redirect('admin/contact');
      }
     
      function delete()
      { //function hapus data
        $kode=$this->input->post('kode_barang');
        $this->db->where('barang_kode',$kode);
        $this->db->delete('barang');
        redirect('admin/contact');
      }
    

}