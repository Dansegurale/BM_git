<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfertesSubscrites extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','language'));
		 $this->session->userdata('currentControler','OfertesSubscrites');
	}

	public function index($lang='')
	{
        if($this->session->rol!=1){
            redirect ('Login/index', 'refresh');
        }
            
        $data['rol']=$this->session->rol;   
        $data['traduccions'] = $this->lang->load('OfertesSubscrites', $lang==''?'cat':$lang);
        //$data['message']=$this->lang->line('Alumne');
		$this->load->view('OfertesSubscrites',$data);
        
	}


}