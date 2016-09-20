<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller{

	public function index(){

		$datos['mensaje'] = 'bienvenido a Tapalpa Webs';

		$this->load->view('pruebas/bienvenido',$datos);
	}

}//fin de la clase Principal