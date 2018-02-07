<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistreEmpresa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
        $this->session->set_userdata('rol', 2);
        $this->session->set_userdata('currentControler','RegistreEmpresa');

	}

	public function index($lang='')
	{
        $data['rol']=$this->session->rol; 
        $data['currentControler']=$this->session->currentControler; 
        
        if($this->session->idioma != $lang && $lang!=''){
            $this->session->idioma = $lang;
        }
        $this->lang->load('Empresa',$this->session->idioma);
        
		$this->load->view('RegistreEmpresa',$data);
        
	}
    
	public function LoginEmpresa()
	{
	
	}

}