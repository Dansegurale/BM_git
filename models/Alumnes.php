<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnes extends CI_Model {
    
	public function Login($data)
	{
		$condicio = "mail =" . "'" . $data['mail'] . "' AND " . "password =" . "'" . $data['pwd'] . "'";
		$this->db->select('*');
		$this->db->from('alumnes');
		$this->db->where($condicio);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
    
    public function getById($id)
	{
        $condicio = "id = '".$id."'";
		$this->db->select('*');
        $this->db->from('alumnes');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
    
    public function getCicles($alumne)
	{
        $condicio = "a.id = '".$alumne."'";
		$this->db->select('c.codi as "codi_cicle", c.nom as "nom_cicle"');
        $this->db->from('alumnes a left join alumnes_cicles ac on a.id=ac.id_alumne left join cicles c on ac.codi_cicle=c.codi');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
    
    public function getOfertesSubscrites($alumne,$camp="codi",$ordre="ASC",$how_many,$offset)
	{
        $condicio = "a.id = '".$id."'";
		$this->db->select('id_oferta');
        $this->db->from('alumnes a left join alumnes_ofertes on a.id = id_alumne');
		$this->db->where($condicio);
        $this->db->order_by($camp,$ordre);
        if($offset!=null && $how_many!=null){
            $this->db->limit($how_many, $offset); 
        }
        
        $result = $q->result_array();
        
        return ($result);
	}
    public function getOfertes($camp="codi",$ordre="ASC",$how_many,$offset){
        $this->db->select('*');
        $this->db->from('ofertes');
        $this->db->order_by($camp,$ordre);
        if($offset!=null && $how_many!=null){
            $this->db->limit($how_many, $offset); 
        }
        
        $q = $this->db->get();
        
        $result = $q->result_array();
        
        return ($result); 
    }
    
    
}