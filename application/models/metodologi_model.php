<?php
class Metodologi_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_metodologi';
    }

    public function get_metod()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}