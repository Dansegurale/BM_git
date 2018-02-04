<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresaris extends CI_Model {
    
	public function Login($data)
	{
		$condition = "mail =" . "'" . $data['mail'] . "' AND " . "password =" . "'" . $data['pwd'] . "'";
		$this->db->select('*');
		$this->db->from('empresaris');
		$this->db->where($condition);
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
        $this->db->from('empresaris');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
    
    public function getOfertes($emp)
	{
        $condicio = "a.id = '".$emp."'";
		$this->db->select('id_oferta');
        $this->db->from('empresaris e left join empresaris_ofertes on e.id = id_empresari');
		$this->db->where($condicio);
        $q = $this->db->get('my_users_table');
        
        $result = $q->result_array();
        
        return ($result);
	}
}