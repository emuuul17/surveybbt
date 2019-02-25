<?php
class Kontak_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'kontak';
    }

    public function get_all()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}