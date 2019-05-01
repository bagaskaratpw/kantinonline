<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Admin_model extends CI_Model
{
  public function Insert($table,$data)
  {
    $res = $this->db->insert($table, $data);
    return $res; 
  }
  public function get($table)
  {
      return $this->db->get($table)->result_array();
  }
  public function GetWhere($table, $where)
  {
    $res = $this->db->get_where($table, $where);
    return $res->result_array();
  }
  function register($table,$where)
  {
    return $this->db->get_where($table,$where);
  }
}

