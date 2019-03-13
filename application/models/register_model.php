<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class register_model extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('register',$data);
       }