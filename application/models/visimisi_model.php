<?php
class Visimisi_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_visimisi';
    }

    public function get_visimisi()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}