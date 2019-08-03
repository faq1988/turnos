<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		redirect('Login');
	}


  public function ver_turnos()
  {    

      if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('turnos_model');
    $lista_turnos=  $this->turnos_model->obtener_turnos();

    if (isset($lista_turnos))
      $data['turnos']= $lista_turnos->result_array();

    $this->load->view('menu');
    $this->load->view('header');
    $this->load->view('ver_turnos', $data);    
  }



	 public function login()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this->load->model('usuario_model');
    $usuario= $this->usuario_model->obtener_usuario($this->session->userdata('username')) ->result();
    
  
    $this->load->view('menu');
    $this->load->view('header');
    $this->load->view('welcome_message');
  }



  public function cambiar_contrasenia()
  {
     if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
   
  
    $this->load->view('menu');
    $this->load->view('header');
    $this->load->view('cambiar_contrasenia');
  }



  public function obtener_turno()
  {
     if (!$this->session->userdata('username'))
    {
      redirect('login');
    }   
    $data=array();
    $this->load->model('turnos_model');
    $lista_especialidades= $this->turnos_model->obtener_especialidades();
    $lista_profesionales= $this->turnos_model->obtener_profesionales();

    if (isset($lista_especialidades))
      $data['especialidades']= $lista_especialidades->result_array();
    if (isset($lista_profesionales))
      $data['profesionales']= $lista_profesionales->result_array();

  
    $this->load->view('menu');
    $this->load->view('header');
    $this->load->view('obtener_turno', $data);
    
 
  }





}
