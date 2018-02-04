<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnesOfertes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
		$this->session->userdata('currentControler','AlumnesOfertes');
	}

	public function index($lang='')
	{
       if($this->session->rol!=1){
       //     redirect ('Login/index', 'refresh');
        }
            
        $data['rol']=$this->session->rol;   
        $data['traduccions'] = $this->lang->load('AlumnesOfertes', $lang==''?'cat':$lang);
        //$data['message']=$this->lang->line('Alumne');
		$this->load->view('AlumnesOfertes',$data);
        
	}
    
	public function LoginEmpresa()
	{
	
	}

}