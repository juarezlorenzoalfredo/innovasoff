<?php
    class FaqModel extends CI_Model{
        private $idFaq;
        private $nombre;
        private $url;
        private $descripcion;
       

        public function __construct(){
            parent::__construct();
        }

        public function getIdFaq(){
            return $this->idFaq;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getUrl(){
            return $this->url;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

       


        public function setIdFaq($idFaq){
            $this->idFaq = $idFaq;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setUrl($url){
            $this->url = $url;
        }


        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

       
        

        public function mostrar(){
            $faq = $this->db->get('faq');
            return $faq->result();
        }

        //------------------ Transaccion 1 Paola -------------
        public function guardar(){
            try{
                $this->db->trans_start();

            /* $data=array( 
                'nombre'=>$this->nombre,  
                'url'=>$this->url,   
                'descripcion'=>$this->descripcion);
            $this->db->insert('faq', $data); */

            $this->db->query("CALL sp_AddFaq(
                '$this->nombre',
                '$this->url',
                '$this->descripcion')");

            $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
        }

        public function listarModificar(){
            $this->db->where('idFaq', $this->idFaq);//se toma el id que se encuentra en la base de datos
            $faq = $this->db->get('faq'); // hace referencia a la tabla
            return $faq->result();//retorna el resultado de lo que contiene la variable de la tabla categorias
        }

//------------------ Transaccion 2 Paola -------------
        public function actualizarDatos(){
          
            try{
                $this->db->trans_start();

            /*$data=array(
                'nombre'=>$this->nombre,  
                'url'=>$this->url, 
                'descripcion'=>$this->descripcion);
            $this->db->where('idFaq', $this->idFaq);
            $this->db->update('faq', $data); */

            $this->db->query("CALL sp_UpdFaq(
                '$this->idFaq',
                '$this->nombre',
                '$this->url',
                '$this->descripcion')");

            $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
          
        }

        //------------------ Transaccion 3 Paola -------------
        public function eliminar(){
            try{
                $this->db->trans_start();

            /*$this->db->where('idFaq', $this->idFaq);
            $this->db->delete('faq');*/

            $this->db->query("CALL sp_DelFaq(
                '$this->idFaq')");

            echo FCPATH. 'images/'.$this->url;
            unlink(FCPATH.'images'.$this->url); 
           

            $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
            
           

            

        }
    }