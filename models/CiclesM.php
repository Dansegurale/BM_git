<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CiclesM extends CI_Model {
    

    public function getAll($codi)
	{
        if($codi!=null){
           $this->db->where("codi = ".$codi); 
        }
        
		$this->db->select('*');
        $this->db->from('cicles');
		
        $q = $this->db->get();
        
        $result = $q->result_array();
        
        return ($result);
	}
    
    public function getPaginated($codi)
	{
        if($codi!=null){
           $this->db->where("codi = ".$codi); 
        }
        
		$this->db->select('*');
        $this->db->from('cicles');
		
        $q = $this->db->get();
        
        $result = $q->result_array();
        
        return ($result);
	}
    
}