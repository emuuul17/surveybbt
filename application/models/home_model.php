<?php
class Home_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
    }

    public function get_data_about()
    {
        
         // active record
         $this->table = 'about_atc';
         $query = $this->db->get($this->table);
         return $query->result();
    }
    public function get_data_owner()
    {
        
         // active record
         $this->table = 'home_owner';
         $query = $this->db->get($this->table);
         return $query->result();
    }
}