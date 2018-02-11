<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistreEmpresa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
        $this->session->set_userdata('rol', 2);
        $this->session->set_userdata('currentControler','RegistreEmpresa');
        
        //no te rol = 2 !!!

	}

	public function index()
	{
        $data['rol']=$this->session->rol;    
        $data['currentControler']=$this->session->currentControler; 
        
        $this->lang->load('Empresa', $this->session->idioma);
		$this->load->view('AltaOfertes',$data);
	}
    
    public function canviaLang($lang=''){
        if($this->session->idioma != $lang && $lang!=''){
             $this->session->set_userdata('idioma',$lang);
        }
                
        redirect ('RegistreEmpresa/index', 'refresh');
    }

}