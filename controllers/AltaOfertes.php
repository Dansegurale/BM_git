<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AltaOfertes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
        $this->session->userdata('currentControler','AltaOfertes');
	}

	public function index($lang='')
	{
        if($this->session->rol!=2){
            redirect ('Login/index', 'refresh');
        }
            
        $data['rol']=$this->session->rol;    
        $data['traduccions'] = $this->lang->load('AltaOfertes', $lang==''?'cat':$lang);
        //$data['message']=$this->lang->line('Alumne');
		$this->load->view('AltaOfertes',$data);
        
	}


}