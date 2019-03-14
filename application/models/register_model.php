<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Register_model extends CI_Model{
     function __construct(){
          parent::__construct();
          $this->table = 'register';
      }

       function daftar($data)
       {
            $this->db->insert('register',$data);
       }

       public function get_all()
       {
            // active record
            $query = $this->db->get($this->table);
            return $query->result();
       }
   
       public function add($data)
       {
           $this->db->insert($this->table, $data);
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

     }      