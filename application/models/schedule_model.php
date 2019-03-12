<?php
class Schedule_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'schedule';
    }

    public function get_jadwal()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}