<?php
class About_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_atc';
    }

    public function get_about()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}