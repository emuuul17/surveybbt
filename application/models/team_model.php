<?php
class Team_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_tim';
    }

    public function get_tim()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}