<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnesOfertes extends CI_Model {
    
	public function getOfertes($id)
	{
		$condicio = "ao.id_oferta =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('alumnes_ofertes ao join ofertes o on ao.id_oferta=o.id');
		$this->db->where($condicio);
		$this->db->limit(1);
		$query = $this->db->get();

		$q = $this->db->get();
        
        $result = $q->result_array();
        
        return ($result);
	}
    public function getAlumnes($id)
	{
		$condicio = "ao.id_alumne =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('alumnes_ofertes ao join alumnes a on ao.id_alumne=a.id_alumne');
		$this->db->where($condicio);
		$this->db->limit(1);
		$query = $this->db->get();

		$q = $this->db->get();
        
        $result = $q->result_array();
        
        return ($result);
	}

}