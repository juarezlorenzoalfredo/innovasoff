<?php   
    class Usuarios extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('UsuariosModel');
           
           
        }

        
		
		
        public function index(){
            $data['titulo'] = 'Usuarios';
            $data['usuarios']=$this->UsuariosModel->mostrar();           
            $this->load->view('template/backend/header',$data);
            $this->load->view('usuarios/mostrar');
            $this->load->view('template/backend/footer');
            
        }

        public function agregar(){
            $data['titulo'] = 'Agregar';
            $data['titulo'] = 'Usuarios';
            
            $this->load->view('template/backend/header',$data);
            $this->load->view('usuarios/agregar');
            $this->load->view('template/backend/footer');
            
        }

        public function guardar(){
            //validacion del campo, alias del campo y la validacion(en este caso required)
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[5]',
            array('required'=>'El campo "Nombre" no tiene que estar vacío',
            'min_length' =>'El campo "Nombre" debe tener al menos 5 caracteres de longitud.'));

            $this->form_validation->set_rules('telefono', 'telefono', 'required|min_length[10]|numeric',
            array('required'=>'El campo "Teléfono" no tiene que estar vacío',
            'min_length' =>'El campo "Teléfono" debe tener al menos 10 caracteres (4471205422).',
            'numeric' =>'El campo "Teléfono" solo acepta números '));

            $this->form_validation->set_rules('email', 'email', 'required|valid_email',
            array('required'=>'El campo "Email" no tiene que estar vacío',
            'valid_email' =>'El campo "Email" debe tener tener un email valido'));
           
            $this->form_validation->set_rules('password', 'password', 'required',
            array('required'=>'El campo "Password" no tiene que estar vacío'));
           
            $this->form_validation->set_rules('privilegios', 'privilegios', 'required',
            array('required'=>'El campo "Privilegios" no tiene que estar vacío'));
           
            
            /*$this->form_validation->set_rules('telefono', 'telefono', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('privilegios', 'privilegios', 'required');*/
            
            if($this->form_validation->run()==TRUE){
            //hace referencia al nombre del campo
            $this->UsuariosModel->setNombre($this->input->POST('nombre'));
            $this->UsuariosModel->setTelefono($this->input->POST('telefono'));
            $this->UsuariosModel->setEmail($this->input->POST('email'));
            $this->UsuariosModel->setPassword($this->input->POST('password'));
            $this->UsuariosModel->setPrivilegios($this->input->POST('privilegios'));
          
            $this->UsuariosModel->guardar();
            redirect('usuarios/index'); //regresa al index para cargar la vista de mostrar que se encentra en la carpeta categorias
            }else{
            $data['titulo'] = 'Acerca de';
            $this->load->view('template/backend/header',$data);  
            $this->load->view('usuarios/agregar');//hace referencia al archivo que esta dentro de la carpeta categorias
            $this->load->view('template/backend/footer');
       
        }
    }
    
    public function modificar($idUsuario){
        $this->UsuariosModel->setIdUsuario($idUsuario);
        $data['usuarios'] = $this->UsuariosModel->listarModificar();
        $data['titulo'] = 'Usuarios';
        $this->load->view('template/backend/header',$data);
        $this->load->view('usuarios/modificar');
        $this->load->view('template/backend/footer');
        
    }
    
    public function actualizar(){
        $this->load->library('form_validation');

            $this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[5]',
            array('required'=>'El campo "Nombre" no tiene que estar vacío',
            'min_length' =>'El campo "Nombre" debe tener al menos 5 caracteres de longitud.'));

            $this->form_validation->set_rules('telefono', 'telefono', 'required|min_length[10]|numeric',
            array('required'=>'El campo "Teléfono" no tiene que estar vacío',
            'min_length' =>'El campo "Teléfono" debe tener al menos 10 caracteres (4471205422).',
            'numeric' =>'El campo "Teléfono" solo acepta números '));

            $this->form_validation->set_rules('email', 'email', 'required|valid_email',
            array('required'=>'El campo "Email" no tiene que estar vacío',
            'valid_email' =>'El campo "Email" debe tener tener un email valido'));
           
            $this->form_validation->set_rules('password', 'password', 'required',
            array('required'=>'El campo "Password" no tiene que estar vacío'));
           
            $this->form_validation->set_rules('privilegios', 'privilegios', 'required',
            array('required'=>'El campo "Privilegios" no tiene que estar vacío'));
           


        $this->UsuariosModel->setIdUsuario($this->input->POST('idUsuario'));
        if($this->form_validation->run()==TRUE){
        $this->UsuariosModel->setNombre($this->input->POST('nombre'));
        $this->UsuariosModel->setTelefono($this->input->POST('telefono'));
        $this->UsuariosModel->setEmail($this->input->POST('email'));
        $this->UsuariosModel->setPassword($this->input->POST('password'));
         $this->UsuariosModel->setPrivilegios($this->input->POST('privilegios'));
        $this->UsuariosModel->actualizarDatos();
        redirect('usuarios/index');

    }else{        
        $data['titulo'] = 'Usuarios';
        $data['usuarios'] = $this->UsuariosModel->listarModificar();
        $this->load->view('template/backend/header',$data);
        $this->load->view('usuarios/modificar');
        $this->load->view('template/backend/footer');
       
            
        }
    }
    
    public function eliminar($idUsuario){
        $this->UsuariosModel->setIdUsuario($idUsuario);
        $this->UsuariosModel->eliminar();//hace referencial al metodo que se creo en el modelo
        redirect('usuarios/index');
    }
    }