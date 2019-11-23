<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Laporanpengujian_model extends CI_Model{
     function __construct(){
          parent::__construct();
          $this->table = 'laporan_pengujian';
      }

       function daftar($data)
       {
            $this->db->insert('register',$data);
       }

       public function get_all()
       {
            // active record
            $this->db->order_by('tanggal_pendaftaran', 'asc');
            $query = $this->db->get($this->table);
            return $query->result();
       }
   
       public function add($data)
       {
           $this->db->insert($this->table, $data);
           $id = $this->db->insert_id();
           return $id;
       }
   
       public function get($id)
       {
           $query = $this->db->get_where($this->table, array('id' => $id));
           return $query->row();
       }
   
       public function update($id, $data)
       {
           $this->db->where('id', $id);
           $this->db->update($this->table, $data);
       }
   
       public function delete($id)
       {
           $this->db->where('id', $id);
           $this->db->delete($this->table);
       }

       public function cari($awal, $akhir)
       {
        $sql = "select * from laporan where tanggal_pendaftaran BETWEEN '".$awal."' AND '".$akhir."'";
        $query = $this->db->query($sql);
        return $query->result();
       }

       public function cariByJenis($jenis, $awal, $akhir)
       {
        $sql = "select * from laporan where jenis_jasa like '%".$jenis."%' AND tanggal_pendaftaran BETWEEN '".$awal."' AND '".$akhir."'";
        $query = $this->db->query($sql);
        return $query->result();
       }

       public function getjenis_jasa($jasa){
        $this->db->where('jenis_jasa',$jasa);
        $query = $this->db->get($this->table);
            return $query->result();
       }

     }      