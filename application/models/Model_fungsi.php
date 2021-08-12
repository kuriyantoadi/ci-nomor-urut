<?php

class Model_fungsi extends CI_Model{

  public function getMax($table = null, $field = null)
  {
    $this->db->select_max($field);
    return $this->db->get($table)->row_array()[$field];
  }

}

 ?>
