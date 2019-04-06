<?php
    class GaleriaModel extends CI_Model{
        private $idGaleria;
        private $nombre;
        private $url;
        private $descripcion;
       

        public function __construct(){
            parent::__construct();
        }

        public function getIdGaleria(){
            return $this->idGaleria;
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

       


        public function setIdGaleria($idGaleria){
            $this->idGaleria = $idGaleria;
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
            $galeria = $this->db->get('galeria');
            return $galeria->result();
        }

        //------------------ Transaccion 1 Paola -------------
        public function guardar(){
            try{
                $this->db->trans_start();

           /* $data=array( 
                'nombre'=>$this->nombre,  
                'url'=>$this->url,   
                'descripcion'=>$this->descripcion
            );
            $this->db->insert('galeria', $data);*/

            $this->db->query("CALL sp_AddGaleria(
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
            $this->db->where('idGaleria', $this->idGaleria);//se toma el id que se encuentra en la base de datos
            $galeria = $this->db->get('galeria'); // hace referencia a la tabla
            return $galeria->result();//retorna el resultado de lo que contiene la variable de la tabla categorias
        }

//------------------ Transaccion 2 Paola -------------
        public function actualizarDatos(){
          
            try{
                $this->db->trans_start();

            /*$data=array(
                'nombre'=>$this->nombre,  
                'url'=>$this->url, 
                'descripcion'=>$this->descripcion);

            $this->db->where('idGaleria', $this->idGaleria);
            $this->db->update('galeria', $data); */

            $this->db->query("CALL sp_UpdGaleria(
                '$this->idGaleria',
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

            /*$this->db->where('idGaleria', $this->idGaleria);
            $this->db->delete('galeria'); */

            $this->db->query("CALL sp_DelGaleria(
                '$this->idGaleria')");

            echo FCPATH. 'images/'.$this->url;
            unlink(FCPATH.'images'.$this->url); 

            $this->db->trans_complete();

        }catch(PDOException $exe){

        $this->db->trans_rollback(); 
        die("Tamal jeje :(" .$exe);
         }

        }
    }