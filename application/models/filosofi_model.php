<?php
class Filosofi_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_filosofi';
    }

    public function get_filo()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}