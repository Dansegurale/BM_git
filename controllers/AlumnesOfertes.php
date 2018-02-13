<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnesOfertes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        
        if($this->session->rol!=1){
            redirect ('Login/index', 'refresh');
        }
        
        $this->load->helper(array('url','language'));
        $this->load->library(array('pagination'));
        $this->load->model('Alumnes');
	}

	public function index()
	{
        $data['rol']=$this->session->rol;    
        $data['currentControler']=$this->uri->segment(1); 
        
        $this->lang->load('Alumnes', $this->session->idioma);
		$this->load->view('AlumnesOfertes',$data);
	}
    
    public function canviaLang($lang=''){
        if($this->session->idioma != $lang && $lang!=''){
             $this->session->set_userdata('idioma',$lang);
        }
                
        redirect ('AlumnesOfertes/index', 'refresh');
    }
    
    public function showData(){
        //con paginacion las que muestro
        $selected = $this->input->post('ordenarPer');
        switch($selected){
            default:
            case '0':
                redirect ('AlumnesOfertes/index', 'refresh');
            break;
            case '1': 
                $camp="data";
                $ordre='ASC';
                break;
            case '2':
                $camp="data";
                $ordre='DESC';
                break;
            case '3':
                $camp="nom_empresa";
                $ordre='ASC';
                break;
            case '4':
                $camp="nom_empresa";
                $ordre='DESC';
                break;
            case '5':
                $camp="carrec";
                $ordre='ASC';
                break;
            case '6':
                $camp="carrec";
                $ordre='DESC';
                break;
            case '7':
                $camp="localitat";
                $ordre='ASC';
                break;
            case '8':
                $camp="localitat";
                $ordre='DESC';
                break;
            case '9':
                $camp="retribucio";
                $ordre='ASC';
                break;
            case '10':
                $camp="retribucio";
                $ordre='DESC';
                break;
        }

        $offset = $this->uri->segment(3)==null ? 1 : $this->uri->segment(3);
       /* var_dump($selected);
        var_dump($camp);
        var_dump($ordre);
        var_dump($offset);
        exit;*/
        $data['paginada'] = $this->Alumnes->getOfertes($camp,$ordre,4,$offset);;
        var_dump($data['paginada']);exit;
        
        $q2 = $this->db->get('cicles');//todas las filas
        
        
        $config['base_url']= base_url('index.php/AlumnesOfertes/showData');
        $config['total_rows']=$q2->num_rows();
        $config['per_page']=4;
        
        $this->pagination->initialize($config);
        
        
        
		$this->load->view('Cicles',$data);
        
    }

}