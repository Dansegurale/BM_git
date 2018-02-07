<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AltaOfertes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
        $this->session->set_userdata('currentControler','AltaOfertes');
	}

	public function index($lang='')
	{
        if($this->session->rol!=2){
            redirect ('Login/index', 'refresh');
        }
            
        $data['rol']=$this->session->rol;    
        $data['currentControler']=$this->session->currentControler; 
        
        if($this->session->idioma != $lang && $lang!=''){
            $this->session->idioma = $lang;
        }
        $this->lang->load('Empresa',$this->session->idioma);
        
		$this->load->view('AltaOfertes',$data);
        
	}


}