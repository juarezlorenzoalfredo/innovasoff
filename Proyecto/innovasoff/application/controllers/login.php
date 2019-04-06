<?php
    class Login extends CI_Controller{
        

        public function indexLog(){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $privilegios = $this->input->post('privilegios');
            

            $this->load->model('user');
            $fila = $this->user->getUser($email);
            $fila = $this->user->getUser($privilegios);

            if($fila != null){
                if($fila->password == $password){
                    $data = array(
                        'email' => $email,
                        'privilegios' => $privilegios,
                        'idUsuario' => $fila->idUsuario,
                        'login' => true
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome/indexBack');
                    
                }else{
                    header("Location: " . base_url());
                }
            }else{
                header("Location: " . base_url());
            }
        }

        public function logout($value='')
        {
            $this->session->sess_destroy();
            redirect('welcome/index?info=2');
        }
    }
