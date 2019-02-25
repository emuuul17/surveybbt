<?php
class Contact_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'contact';
    }

    public function get_all()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}