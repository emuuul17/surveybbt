<?php
class Target_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_sasaran';
    }

    public function get_sasaran()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}