<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnesOfertes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
		$this->session->set_userdata('currentControler','AlumnesOfertes');
	}

	public function index($lang='')
	{
       if($this->session->rol!=1){
       //     redirect ('Login/index', 'refresh');
        }
            
        $data['rol']=$this->session->rol;   
        $data['currentControler']=$this->session->currentControler;   
        
        if($this->session->idioma != $lang && $lang!=''){
            $this->session->idioma = $lang;
        }
        $this->lang->load('Alumnes',$this->session->idioma);
        
		$this->load->view('AlumnesOfertes',$data);
        
	}
    

}