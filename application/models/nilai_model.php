<?php
class Nilai_model extends CI_MODEL {
    function __construct(){
        parent::__construct();
        $this->table = 'about_nilai';
    }

    public function get_nilai()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }
}