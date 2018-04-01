<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adoptar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mperros');
	}

	public function index($id= NULL)
	{
		$data['perros_item'] = $this->mperros->get_PerrosId($id);
        $this->load->view('layout/header');
        $this->load->view('Adoptar/index',$data);
        $this->load->view('layout/footer');
			
	}

	public function perritos(){
		$id_perro=$_POST['id_perro'];
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$cedula=$_POST['cedula'];
		$edad=$_POST['edad'];
		$sexo=$_POST['sexo'];
		$dirección=$_POST['dirección'];
		$telefono=$_POST['telefono'];
		$pass=$this->mperros->reservar($id_perro,$nombre,$apellidos,$cedula,$edad,$sexo,$dirección,$telefono);
		
		if($pass){
			$html="<div style='text-align: center'> <div class='alert alert-danger' role='alert'>Ya se ha solicitado este bello animalito con sus datos</div></div>";
		}else{
			$html="<div style='text-align: center'> <div class='alert alert-success' role='alert'>Gracias su solicitud se ha enviado.</div><div class='divider'></div><h5>Te llamaremos ó Enviaremos a tu correo para formalizar tu solicitud</h5></div>";
		}

		$data['mensaje']=$html;
		$data['perros_item'] = $this->mperros->get_PerrosId($id_perro);

		$this->load->view('layout/header');
        $this->load->view('Adoptar/index',$data);
        $this->load->view('layout/footer');
	}




}

/* End of file adoptar.php */
/* Location: ./application/controllers/adoptar.php */