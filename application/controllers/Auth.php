<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends  CI_Controller
{


    /**
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }
    public function login(){

        $data = new stdClass();
        $data->contenido = 'auth/login';
        $data->title ="Proyecto CI: LOGIN ";
        $data->title_panel ="Iniciar Sesión";
        $data->titulo_inicio =" Proyecto CI: Web App";
        $data->active = 'login';
        // carpeta: start : Maneja todo el header y footer mas contenido
        $this->load->view('start',$data);
    }

    public function signin(){

        $this->form_validation->set_rules('correo', 'Username', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password',  array('min_length[5]','max_length[12]','required'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->login();
        }
        else
        {
            $correo = $this->input->post('correo');
            $pass = $this->input->post('pass');
            $user = $this->Auth_model->getUser($correo);
            if(!$user){
                $this->session->set_flashdata("mensaje_error","Datos de usuario incorrecto");
                redirect(base_url().'login');
            }
            if($user->users_pass != sha1(md5($pass))){
                $this->session->set_flashdata("mensaje_error","Datos de contraseña incorrecto");
                redirect(base_url().'login');
            }
            $_SESSION['userid'] = $user->idusers;
            $_SESSION['user_mail'] = $user->users_email;
            $_SESSION['is_logged_in'] = TRUE;
            $this->session->set_flashdata("mensaje_sucess","Bienvenido ".$_SESSION['user_mail']);
            redirect(base_url().'home');

        }

    }

    public function logout(){
        session_destroy();
        redirect();
    }
}