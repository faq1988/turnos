<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turnos extends CI_Controller {




  public function seleccionar_turnos()
  {    

      if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $this->load->model('turnos_model');
    $data= array();
    $id_profesional= $this->input->post('profesional');
    $profesional = $this->turnos_model->obtener_profesional($id_profesional);
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $dia_actual=new DateTime();
    $fecha_inicio=  $dia_actual->format('Y/m/d h:m:s');
    $turnos_disponibles = $this->turnos_model->obtener_turnos_disponibles($id_profesional, $fecha_inicio);

    if (isset($turnos_disponibles))
      $data['turnos_disponibles']= $turnos_disponibles->result_array();

    $this->load->view('menu');
    $this->load->view('header');
    $this->load->view('elegir_turno', $data);    
  }


  public function fetch_profesional()
   {      
    $this->load->model('turnos_model');
    $id= $this->uri->segment(3);    
    $result = $this->turnos_model->fetch_profesional($id)->result();
    echo json_encode($result);  
   }






}
