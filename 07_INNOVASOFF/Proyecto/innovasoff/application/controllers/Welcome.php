<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('AcercaDeModel');
			$this->load->model('GaleriaModel');
			$this->load->model('FaqModel');
			$this->load->model('user');
			$this->load->model('DudasModel');
		}

	public function index()
	{
		$data['titulo'] = 'Innovasoft';
		$data['acercade']=$this->AcercaDeModel->mostrar();
		$data['galeria']=$this->GaleriaModel->mostrar();
		$data['faq']=$this->FaqModel->mostrar();

			
		$this->load->view('template/header',$data);
		$this->load->view('sitio');
		$this->load->view('template/footer');
		$this->load->view('login');
		
	}

	public function indexBack()
	{
		
		$data['titulo'] = 'Inicio';
		
		$this->load->view('template/backend/header',$data);
		$this->load->view('index');
		$this->load->view('template/backend/footer');
		
	}

	public function login()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	/*function sendMail(){
		$nombre = $this->input->post('nombre');
	    $email = $this->input->post('email');
	    $asunto = $this->input->post('asunto');
	    $mensaje = $this->input->post('mensaje');
           
		$this->load->library('email');
		$configuraciones['mailtype'] = 'html';
		$this->email->initialize($configuraciones);
		$this->email->from($email,$nombre);
		$this->email->to('juarezlorenzoalfredo@gmail.com');
		$this->email->subject($asunto);
		$this->email->message($mensaje);
			if($this->email->send()){
				redirect('welcome/index');
			}else{
				echo $this->email->print_debugger();
			}

	} */
}
