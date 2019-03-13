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

    public function get_all()
    {
         // active record
         $query = $this->db->get($this->table);
         return $query->result();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function get($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}