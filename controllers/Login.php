<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    


	public function __construct()
	{
		parent::__construct();
        $this->load->helper('form');
		$this->load->helper(array('url','language'));
        $this->load->library('form_validation');
        
        $this->session->userdata('idioma','cat');
        $this->session->userdata('currentControler','Login');
        
	}

	public function index($lang='')
	{
        if($this->session->idioma != $lang && $lang!=''){
            $this->session->idioma = $lang;
        }
        
        $this->lang->load('Login', $this->session->idioma);
		$this->load->view('Login');
	}
    
    
	public function LoginEmpresa()
	{
        
		$data['mail'] = $this->input->post('LoginEmpresaMail');
		$data['pwd'] = $this->input->post('LoginEmpresaPassword');
		
        $this->load->model('Empresaris');
		$data['result'] = $this->Empresaris->Login($data);
        
		
		if ($this->Empresaris->Login($data)) {
			$this->session->email = $data['mail'];
            $this->session->set_userdata('rol', 2);
            redirect ('GestioOfertes/index', 'refresh');
		} else {
			redirect ('Login/index', 'refresh');
		}
	}
    
    public function LoginAlumne()
	{
		$data['mail'] = $this->input->post('LoginAlumneMail');
		$data['pwd'] = $this->input->post('LoginAlumnePassword');	
        
		$this->load->model('Alumnes');
		$data['result'] = $this->Alumnes->Login($data);

		if ($this->Alumnes->Login($data)) {
			$this->session->email = $data['mail'];
            $this->session->set_userdata('rol', 1);
            redirect ('AlumnesOfertes/index', 'refresh');
		} else {
			redirect ('Login/index', 'refresh');
		}
	}
    
    public function Logout()
	{
		$this->session->sess_destroy();
        redirect ('Login/index', 'refresh');
	}

}