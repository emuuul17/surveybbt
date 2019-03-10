<?php
class Gallery_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_foto';
    }

    public function get_foto()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}