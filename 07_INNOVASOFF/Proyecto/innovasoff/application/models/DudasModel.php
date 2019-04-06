<?php 

    class DudasModel extends CI_Model{
        private $idDudas;
        private $nombre;
        private $email;
        private $asunto;
        private $mensaje;
        

        function __construct(){
            parent::__construct();
        }

        public function getIdDudas(){
            return $this->idDudas;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getAsunto(){
            return $this->asunto;
        }

        public function getMensaje(){
            return $this->mensaje;
        }



        public function setIdDudas($idDudas){
            $this->idDudas = $idDudas;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        
        public function setEmail($email){
            $this->email = $email;
        }

        public function setAsunto($asunto){
            $this->asunto = $asunto;
        }

        public function setMensaje($mensaje){
            $this->mensaje = $mensaje;
        }




        public function mostrar(){
            $dudas = $this->db->get('dudas'); //hace referencia a la tabla
            return $dudas->result();//retorno de los datos que contiene la variable categorias
        }


    
          //---------- Transaccion 4 Ana----------
        public function guardar(){
            try{
                $this->db->trans_start();

           /* $data=array(
                'nombre'=>$this->nombre,
                'email'=>$this->email,
                'asunto'=>$this->asunto,
                'mensaje'=>$this->mensaje 
                 
                
            );
            $this->db->insert('dudas', $data); */

            $this->db->query("CALL sp_AddDudas(
                '$this->nombre',
                '$this->email',
                '$this->asunto',
                '$this->mensaje')");

            $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
        }
           


        public function listarModificar(){
            $this->db->where('idDudas', $this->idDudas);//se toma el id que se encuentra en la base de datos
            $dudas = $this->db->get('dudas'); // hace referencia a la tabla
            return $dudas->result();//retorna el resultado de lo que contiene la variable de la tabla categorias
        }

        //---------- Transaccion 5 Ana----------
        public function actualizarDatos(){
            try{
                $this->db->trans_start();
          
           /* $data=array(
                'nombre'=>$this->nombre,
                'email'=>$this->email,
                'asunto'=>$this->asunto,
                'mensaje'=>$this->mensaje 
                
            );
            $this->db->where('idDudas', $this->idDudas);
            $this->db->update('dudas', $data); */

            $this->db->query("CALL sp_UpdDudas(
                '$this->idDudas',
                '$this->nombre',
                '$this->email',
                '$this->asunto',
                '$this->mensaje')");

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
            
            /*$this->db->where('idDudas', $this->idDudas);
            $this->db->delete('dudas'); */

            $this->db->query("CALL sp_DelDudas(
                '$this->idDudas')");
   
            $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }  
        }
     }