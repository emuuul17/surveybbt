<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_user_full_name($id){
    $CI =& get_instance();
    $CI->load->database();

    $CI->db->where('id', $id);
    $query = $CI->db->get('users');
    if($query->num_rows() > 0){
        return $query->row()->first_name.' '.$query->row()->last_name;
    } else {
        return false;
    }
}