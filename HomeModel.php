<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel extends CI_Model{
    public function add_data($post){
      $this->db->insert('students',$post);  
        
    }
     
}