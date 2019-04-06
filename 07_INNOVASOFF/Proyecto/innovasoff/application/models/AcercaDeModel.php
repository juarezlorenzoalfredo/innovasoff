<?php 

    class AcercaDeModel extends CI_Model{
        private $idAcercaDe;
        private $titulo;
        private $informacion;
        

        function __construct(){
            parent::__construct();
        }

        public function getIdAcercaDe(){
            return $this->idAcercaDe;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getInformacion(){
            return $this->informacion;
        }



        public function setIdAcercaDe($idAcercaDe){
            $this->idAcercaDe = $idAcercaDe;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        
        public function setInformacion($informacion){
            $this->informacion = $informacion;
        }



        public function mostrar(){
            $acercade = $this->db->get('acercade'); //hace referencia a la tabla
            return $acercade->result();//retorno de los datos que contiene la variable categorias
        }


    
          //---------- Transaccion 4 Ana----------
        public function guardar(){
            try{
                $this->db->trans_start();

            /*$data=array(
                'titulo'=>$this->titulo,
                'informacion'=>$this->informacion);
            $this->db->insert('acercaDe', $data); */ 

            $this->db->query("CALL sp_AddAcercaDe(
                '$this->titulo',
                '$this->informacion')");

    $this->db->trans_complete();

    }catch(PDOException $exe){

    $this->db->trans_rollback(); 
    die("Tamal jeje :(" .$exe);
     }

        }
           


        public function listarModificar(){
            $this->db->where('idAcercaDe', $this->idAcercaDe);//se toma el id que se encuentra en la base de datos
            $acercade = $this->db->get('acercade'); // hace referencia a la tabla
            return $acercade->result();//retorna el resultado de lo que contiene la variable de la tabla categorias
        }

        //---------- Transaccion 5 Ana----------
        public function actualizarDatos(){
            try{
                $this->db->trans_start();

           /* $data=array(
                'titulo'=>$this->titulo,
                'informacion'=>$this->informacion );
            $this->db->where('idAcercaDe', $this->idAcercaDe);
            $this->db->update('acercaDe', $data); */

            $this->db->query("CALL sp_UpdAcercaDe(
                '$this->idAcercaDe',
                '$this->titulo',
                '$this->informacion')");
            
            $this->db->trans_complete();


        }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
        }

        //---------- Transaccion 6 Ana----------
        public function eliminar(){

            try{
                $this->db->trans_start();
            
            /*$this->db->where('idAcercaDe', $this->idAcercaDe);
            $this->db->delete('acercaDe'); */

            $this->db->query("CALL sp_DelAcercaDe(
                '$this->idAcercaDe')");
            $this->db->trans_complete();


            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
        }
     }