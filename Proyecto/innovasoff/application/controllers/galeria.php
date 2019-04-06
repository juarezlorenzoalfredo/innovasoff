<?php
    class Galeria extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('GaleriaModel');
        }

        public function index(){
            $data['titulo'] = 'Galeria';
            $data['galeria'] = $this->GaleriaModel->mostrar();
            $this->load->view('template/backend/header',$data);    
            $this->load->view('galeria/mostrar');  
            $this->load->view('template/backend/footer');
            
    }

   public function agregar(){
        $data['titulo'] = 'Galeria';
        $this->load->view('template/backend/header',$data);
        $this->load->view('galeria/agregar');
        $this->load->view('template/backend/footer');
        
    }

    public function guardar(){
        $this->load->library('form_validation');
            
        if($this->form_validation->run()==TRUE){
            $this->form_validation->set_rules('nombre', 'nombre', 'required');
            $this->form_validation->set_rules('url', 'url');                   
            $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        }else{
            $data['titulo'] = 'Galeria';
            $this->load->view('template/backend/header',$data);
            $this->load->view('galeria/agregar');
            $this->load->view('template/backend/footer');

        }

        $ruta = "images";
        $config['upload_path'] = "./$ruta/";
        $config['allowed_types'] =  'gif|jpg|png|svg|jpeg';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('url')){
            echo "No se subio la imagen. Pruebe con otro formato";
    
        }else{
        
        $datosImg = $this->upload->data();
                $this->GaleriaModel->setNombre($this->input->POST('nombre'));
                $this->GaleriaModel->setUrl($datosImg['file_name']);
                $this->GaleriaModel->setDescripcion($this->input->POST('descripcion'));    
                $this->GaleriaModel->guardar();
           
        
        }  
    
        redirect('galeria/index');
}
    

    public function modificar($idGaleria){
        $this->GaleriaModel->setIdGaleria($idGaleria);
        $data['galeria'] = $this->GaleriaModel->listarModificar();
        $data['titulo'] = 'Galeria';
        $this->load->view('template/backend/header',$data);
        $this->load->view('galeria/modificar');
        $this->load->view('template/backend/footer');
        
    }

    public function actualizar(){
        $viejaUrl = $this->input->POST('viejaUrl');
        if($_FILES['url']['tmp_name'] !=null){
        $ruta = "images";

        $config['upload_path'] = "./$ruta";
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';

        $this->load->library('upload', $config);

            if(!$this->upload->do_upload('url')){
                echo "Fallo el proceso";
            }else{
                $datosImg = $this->upload->data();
                $this->GaleriaModel->setIdGaleria($this->input->POST('idGaleria'));
                $this->GaleriaModel->setNombre($this->input->POST('nombre'));
                $this->GaleriaModel->setUrl($datosImg['file_name']);
                $this->GaleriaModel->setDescripcion($this->input->POST('descripcion'));    
                $this->GaleriaModel->actualizarDatos();
                unlink(FCPATH.'images/'.$viejaUrl);
            }

        }else{

        $this->GaleriaModel->setIdGaleria($this->input->POST('idGaleria'));
        $this->GaleriaModel->setNombre($this->input->POST('nombre'));
        $this->GaleriaModel->setUrl($viejaUrl); 
        $this->GaleriaModel->setDescripcion($this->input->POST('descripcion'));    
               
        $this->GaleriaModel->actualizarDatos();

        }
       redirect('galeria/index');
    
}

    public function eliminar($idGaleria){
    $this->GaleriaModel->setIdGaleria($idGaleria);
    $this->GaleriaModel->setUrl($url);
    $this->GaleriaModel->eliminar();
        redirect('galeria/index');
    } 
}

