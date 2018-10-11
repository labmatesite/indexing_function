<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mymodel extends CI_Model{
    function viewdata(){
            $this->db->select('*');
            $this->db->from('tbl_books');
            $query = $this->db->get();
            return $query->result_array();
        }
    }
?>