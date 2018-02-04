<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistreEmpresa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
        $this->session->set_userdata('rol', 2);
        $this->session->userdata('currentControler','RegistreEmpresa');

	}

	public function index($lang='')
	{
        $data['rol']=$this->session->rol; 
        $data['traduccions'] = $this->lang->load('RegistreEmpresa', $lang==''?'cat':$lang);
        //$data['message']=$this->lang->line('Alumne');
		$this->load->view('RegistreEmpresa',$data);
        
	}
    
	public function LoginEmpresa()
	{
	
	}

}