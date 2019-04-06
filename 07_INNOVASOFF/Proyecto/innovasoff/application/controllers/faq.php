<?php
    class Faq extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('FaqModel');
        }

        public function index(){
            $data['titulo'] = 'FAQ';
            $data['faq'] = $this->FaqModel->mostrar();
            $this->load->view('template/backend/header',$data);    
            $this->load->view('faq/mostrar');  
            $this->load->view('template/backend/footer');
            
    }

   public function agregar(){
        $data['titulo'] = 'FAQ';
        $this->load->view('template/backend/header',$data);
        $this->load->view('faq/agregar');
        $this->load->view('template/backend/footer');
        
    }

    public function guardar(){

            if($this->form_validation->run()==TRUE){
            $this->form_validation->set_rules('nombre', 'nombre', 'required');
            $this->form_validation->set_rules('url', 'url', 'required');                   
            $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        }else{
            $this->load->view('template/backend/header',$data);
            $this->load->view('faq/agregar');
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
                $this->FaqModel->setNombre($this->input->POST('nombre'));
                $this->FaqModel->setUrl($datosImg['file_name']);
                $this->FaqModel->setDescripcion($this->input->POST('descripcion'));    
                $this->FaqModel->guardar();
                  
    }
    redirect('faq/index');
}
    

    public function modificar($idFaq){
        $this->FaqModel->setIdFaq($idFaq);
        $data['faq'] = $this->FaqModel->listarModificar();
        $data['titulo'] = 'FAQ';
        $this->load->view('template/backend/header',$data);
        $this->load->view('faq/modificar');
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
                $this->FaqModel->setIdFaq($this->input->POST('idFaq'));
                $this->FaqModel->setNombre($this->input->POST('nombre'));
                $this->FaqModel->setUrl($datosImg['file_name']);
                $this->FaqModel->setDescripcion($this->input->POST('descripcion'));    
                $this->FaqModel->actualizarDatos();
                unlink(FCPATH.'images/'.$viejaUrl);
            }

        }else{

        $this->FaqModel->setIdFaq($this->input->POST('idFaq'));
        $this->FaqModel->setNombre($this->input->POST('nombre'));
        $this->FaqModel->setUrl($viejaUrl); 
        $this->FaqModel->setDescripcion($this->input->POST('descripcion'));    
               
        $this->FaqModel->actualizarDatos();

        }
       redirect('faq/index');
    }

    public function eliminar($idFaq){

    $this->FaqModel->setIdFaq($idFaq);
    $this->FaqModel->eliminar();
    
        redirect('faq/index');
    } 
}