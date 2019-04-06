<?php   
    class Dudas extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('DudasModel');
        }

        
		
		
        public function index(){
            $data['titulo'] = 'Dudas';
            $data['dudas']=$this->DudasModel->mostrar(); //la variable categorias se pasa al foreach de el archivo mostrar
            $this->load->view('template/backend/header',$data);
            $this->load->view('dudas/mostrar');
            $this->load->view('template/backend/footer');//hace referencia al archivo que esta dentro de la carpeta categorias
        }

        public function agregar(){
            $data['titulo'] = 'Agregar';
            $this->load->view('template/backend/header',$data);
            $this->load->view('dudas/agregar');//hace referencia al archivo que esta dentro de la carpeta categorias
            $this->load->view('template/backend/footer');
                  }

        public function guardar(){
          
            //validacion del campo, alias del campo y la validacion(en este caso required)
            $this->form_validation->set_rules('nombre', 'nombre', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
             $this->form_validation->set_rules('asunto', 'asunto', 'required');
              $this->form_validation->set_rules('mensaje', 'mensaje', 'required');

              if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->form_validation->run()==TRUE){
            //hace referencia al nombre del campo
            $this->DudasModel->setNombre($this->input->POST('nombre'));
            $this->DudasModel->setEmail($this->input->POST('email'));
            $this->DudasModel->setAsunto($this->input->POST('asunto'));
            $this->DudasModel->setMensaje($this->input->POST('mensaje'));
          
            
            
            $this->DudasModel->guardar();
            //header("Location: " . base_url());
            redirect('welcome/index?info=1'); //regresa al index para cargar la vista de mostrar que se encentra en la carpeta categorias
            }else{
            $this->load->view('welcome/index');//hace referencia al archivo que esta dentro de la carpeta categorias
        }
    }
}
    public function modificar($idDudas){
        $this->DudasModel->setIdDudas($idDudas);
        $data['dudas'] = $this->DudasModel->listarModificar();
        $data['titulo'] = 'Dudas';
        $this->load->view('template/backend/header',$data);
        $this->load->view('dudas/modificar');
        $this->load->view('template/backend/footer');
        
    }
    
    public function actualizar(){
        $this->DudasModel->setIdDudas($this->input->POST('idDudas'));
        $this->DudasModel->setNombre($this->input->POST('nombre'));
        $this->DudasModel->setEmail($this->input->POST('email'));
        $this->DudasModel->setAsunto($this->input->POST('asunto'));
         $this->DudasModel->setMensaje($this->input->POST('mensaje'));
        $this->DudasModel->actualizarDatos();
        redirect('dudas/index');
    }
    
    public function eliminar($idDudas){
        $this->DudasModel->setIdDudas($idDudas);
        $this->DudasModel->eliminar();
        redirect('dudas/index'); 
        }

    }