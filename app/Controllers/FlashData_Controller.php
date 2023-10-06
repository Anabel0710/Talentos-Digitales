<?php
class FlashData_Controller extends CI_Controller {

   public function index() { 
      // Cargar la biblioteca de sesiones
      $this->load->library('session');
      
      // Redirigir a la página de inicio
      $this->load->view('flashdata_home'); 
   } 

   public function add() { 
      // Cargar la biblioteca de sesiones
      $this->load->library('session'); 
      // Cargar el ayudante (helper) de URL
      $this->load->helper('url'); 

      // Agregar datos flash
      $this->session->set_flashdata('item','item-value'); 

      // Redirigir a la página de inicio
      redirect('flashdata'); 
   } 
}
?>
