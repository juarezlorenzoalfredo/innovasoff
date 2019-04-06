<?php 

    class UsuariosModel extends CI_Model{
        private $idUsuario;
        private $nombre;
        private $telefono;
        private $email;
        private $password;
        private $privilegios;
        

        function __construct(){
            parent::__construct();
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getPrivilegios(){
            return $this->privilegios;
        }



        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setPrivilegios($privilegios){
            $this->privilegios = $privilegios;
        }




        public function mostrar(){
            $usuarios = $this->db->get('usuarios'); //hace referencia a la tabla
            return $usuarios->result();//retorno de los datos que contiene la variable categorias
        }


    
          //---------- Transaccion 4 Ana----------
        public function guardar(){
            try{
                $this->db->trans_start();

          /*  $data=array(
                'nombre'=>$this->nombre,
                'telefono'=>$this->telefono,
                'email'=>$this->email,
                'password'=>$this->password,
                'privilegios'=>$this->privilegios);
            $this->db->insert('usuarios', $data); */

            $this->db->query("CALL sp_AddUsuarios(
                '$this->nombre',
                '$this->telefono',
                '$this->email',
                '$this->password',
                '$this->privilegios')");

            $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }
        }
           


        public function listarModificar(){
            $this->db->where('idUsuario', $this->idUsuario);//se toma el id que se encuentra en la base de datos
            $usuarios = $this->db->get('usuarios'); // hace referencia a la tabla
            return $usuarios->result();//retorna el resultado de lo que contiene la variable de la tabla categorias
        }

        //---------- Transaccion 5 Ana----------
        public function actualizarDatos(){
            try{
                $this->db->trans_start();
          
            /*$data=array(
               'nombre'=>$this->nombre,
                'telefono'=>$this->telefono,
                'email'=>$this->email,
                'password'=>$this->password,
                'privilegios'=>$this->privilegios 
                
            );
            $this->db->where('idUsuario', $this->idUsuario);
            $this->db->update('usuarios', $data);*/

            $this->db->query("CALL sp_UpdUsuarios(
                '$this->idUsuario',
                '$this->nombre',
                '$this->telefono',
                '$this->email',
                '$this->password',
                '$this->privilegios')");

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

            /*$this->db->where('idUsuario', $this->idUsuario);
            $this->db->delete('usuarios'); */

            $this->db->query("CALL sp_DelUsuarios(
                '$this->idUsuario')");

                $this->db->trans_complete();

            }catch(PDOException $exe){

            $this->db->trans_rollback(); 
            die("Tamal jeje :(" .$exe);
             }

           
        }
     }