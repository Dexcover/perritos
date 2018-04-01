<?php
class Auth extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('login_model');
            $this->load->helper('url_helper');
            $this->load->helper('url');     
    }
  

    public function index()
    {
        $this->load->helper('form');
        if(!isset($_POST['user'])){
            $this->load->view('templates/header');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        }else{

            $validar['user']=$this->login_model->comprobar($_POST['user'],$_POST['password']);

            if($validar['user']){

            $this->load->view('templates/header');
            $this->load->view('auth/verificar',$validar);
            $this->load->view('templates/footer');
                }
                else{    
                    $this->load->view('templates/header');
                    $this->load->view('auth/login');
                    $this->load->view('templates/footer');
                }
            } 
    }
    public function logout()
    {        
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }
        
}