<?php   
    class AcercaDe extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('AcercaDeModel');
        }

        
		
		
        public function index(){
            $data['titulo'] = 'Acerca de';
            $data['acercaDe']=$this->AcercaDeModel->mostrar(); 
            $this->load->view('template/backend/header',$data);
            $this->load->view('acercaDe/mostrar');
            $this->load->view('template/backend/footer');
           
        }

        public function agregar(){
            $data['titulo'] = 'Acerca de';
            $this->load->view('template/backend/header',$data);
            $this->load->view('acercaDe/agregar');
            $this->load->view('template/backend/footer');
            
        }

       

        public function guardar(){
            //validacion del campo, alias del campo y la validacion(en este caso required)
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]', 
            array('required'=>'El campo "Titulo" no tiene que estar vacío',
            'min_length' =>'El campo de título debe tener al menos 5 caracteres de longitud.')); 

            $this->form_validation->set_rules('informacion', 'informacion', 'required|min_length[5]',
            array('required'=>'El campo "Información" no tiene que estar vacío.',
            'min_length'=>'El campo "Información" debe tener al menos 5 caracteres de longitud.')); 
            
            //hace referencia al nombre del campo
            if($this->form_validation->run()==TRUE){
            $this->AcercaDeModel->setTitulo($this->input->POST('titulo'));
            $this->AcercaDeModel->setInformacion($this->input->POST('informacion'));
          
            
            
            $this->AcercaDeModel->guardar();
            redirect('acercaDe/index'); //regresa al index para cargar la vista de mostrar que se encentra en la carpeta categorias
        }else{
            $data['titulo'] = 'Acerca de';
            $this->load->view('template/backend/header',$data);
            $this->load->view('acercaDe/agregar');//hace referencia al archivo que esta dentro de la carpeta categorias
            $this->load->view('template/backend/footer');
        }  
    }
    
    public function modificar($idAcercaDe){
        $this->AcercaDeModel->setIdAcercaDe($idAcercaDe);
        $data['acercade'] = $this->AcercaDeModel->listarModificar();
        $data['titulo'] = 'Acerca de';
        $this->load->view('template/backend/header',$data);
        $this->load->view('acercaDe/modificar');
        $this->load->view('template/backend/footer');
        
    }
    
    public function actualizar(){
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]', 
        array('required'=>'El campo "Titulo" no tiene que estar vacío',
        'min_length' =>'El campo de título debe tener al menos 5 caracteres de longitud.')); 

        $this->form_validation->set_rules('informacion', 'informacion', 'required|min_length[5]',
        array('required'=>'El campo "Información" no tiene que estar vacío.',
        'min_length' =>'El campo "Información" debe tener al menos 5 caracteres de longitud.'));

        
        $this->AcercaDeModel->setIdAcercaDe($this->input->POST('idAcercaDe'));
        if($this->form_validation->run()==TRUE){
        $this->AcercaDeModel->setTitulo($this->input->POST('titulo'));
        $this->AcercaDeModel->setInformacion($this->input->POST('informacion'));
        $this->AcercaDeModel->actualizarDatos();
        redirect('acercaDe/index');
    }else{        
        $data['titulo'] = 'Acerca de';
        $data['acercade'] = $this->AcercaDeModel->listarModificar();
        $this->load->view('template/backend/header',$data);
        $this->load->view('acercaDe/modificar');
        $this->load->view('template/backend/footer');
       
            
        }
    }  
    
    
    public function eliminar($idAcercaDe){
        $this->AcercaDeModel->setIdAcercaDe($idAcercaDe);
        $this->AcercaDeModel->eliminar();//hace referencial al metodo que se creo en el modelo
        redirect('acercaDe/index');
    }
    }