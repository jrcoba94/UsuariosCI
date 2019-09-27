<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller
{
function __construct(){
    
parent::__construct();

        $this->load->model('insert_model');
}
	public function index()
	{
		$this->load->view('inicio');
	}
	public function insert_usuario()
  {
    //get data from myview
    $data = array(
        'Nombre'=> $this->input->post('Nombre'),
        'Nombrelast'=> $this->input->post('Nombrelast'),
        'Password'=> $this->input->post('Password'),
        'Email'=> $this->input->post('Email'),
        'Website'=> $this->input->post('Website'),
        'bio'=> $this->input->post('bio'),
        );
    $this->load->model('Insert_model');
    $this->Insert_model->insert_usuario($data);
    
    //send message 
    $data['message'] = 'Datos insertados';
    $this->load->view('inicio', $data);
    redirect('');
    
    }
}
