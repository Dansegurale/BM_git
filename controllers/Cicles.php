<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cicles extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('pagination'));

        
	}

	public function index()
	{
        //sin paginacion
        $this->load->model('CiclesM');

        //con paginacion
        //las que muestro
        $offset = $this->uri->segment(3)==null ? 1 : $this->uri->segment(3);
        $data['paginada'] = $this->CiclesM->getSorted('codi','ASC',4,$offset);;
        
        
        $q2 = $this->db->get('cicles');//todas las filas
        
        
        $config['base_url']= base_url('index.php/Cicles/index');
        $config['total_rows']=$q2->num_rows();
        $config['per_page']=4;
        
        $this->pagination->initialize($config);
        
        
        
		$this->load->view('Cicles',$data);
        
	}


}