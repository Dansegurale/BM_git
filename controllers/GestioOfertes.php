<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestioOfertes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
        
        $this->session->set_userdata('currentControler','AltaOfertes');
        
        if($this->session->rol!=2){
            redirect ('Login/index', 'refresh');
        }
	}

	public function index()
	{
        $data['rol']=$this->session->rol;    
        $data['currentControler']=$this->session->currentControler; 
        
        $this->lang->load('Empresa', $this->session->idioma);
		$this->load->view('GestioOfertes',$data);
	}
    
    public function canviaLang($lang=''){
        if($this->session->idioma != $lang && $lang!=''){
             $this->session->set_userdata('idioma',$lang);
        }
                
        redirect ('GestioOfertes/index', 'refresh');
    }

}