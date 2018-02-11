<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ofertes extends CI_Model {
        
    public function getById($id)
	{
        $condicio = "id = '".$id."'";
		$this->db->select('*');
        $this->db->from('ofertes');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
    
    public function getAlumnes($oferta)
	{
        $condicio = "o.id = '".$oferta."'";
		$this->db->select('id_alumne');
        $this->db->from('ofertes o left alumnes_ofertes on o.id=id_oferta');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
    
    public function getEmpresaris($oferta)
	{
        $condicio = "o.id = '".$oferta."'";
		$this->db->select('id_empresari');
        $this->db->from('ofertes o left empresaris_ofertes on o.id=id_oferta');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
    
     public function getAll()
	{
		$this->db->select('id,nom_empresa,retribucio');
        $this->db->from('ofertes');
		$this->db->where("true");
        $q = $this->db->get('borsamila');
        
        $result = $q->result_array();
        
        return ($result);
	}
}