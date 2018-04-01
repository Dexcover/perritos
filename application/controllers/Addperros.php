<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addperros extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mperros');

	}

	public function index()
	{
		   $this->load->view('templates/header');
            $this->load->view('Perros/index');
            $this->load->view('templates/footer');
	}

	public function registrar(){
		
		$name=$_POST['name'];
		$edad=$_POST['edad'];
		$descripcion=$_POST['descripcion'];
		$raza=$_POST['raza'];
		$estado=$_POST['estado'];
		$sexo=$_POST['sexo'];
		
		$foto=basename( $_FILES['uploadedfile']['name']);

		$target_path = "Img_Perros/";
		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
		move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);

		$pass=$this->mperros->ingresar($name,$edad,$descripcion,$raza,$estado,$foto,$sexo);

		if($pass){
			$html="<div style='text-align: center'> <div class='alert alert-danger' role='alert'>Ya se ha registrado el perrito anteriormente</div></div>";
		}else{
			$html="<div style='text-align: center'> <div class='alert alert-success' role='alert'>Genial!</div><div class='divider'></div><h5>Mascota agregado correctamente</h5></div>";
		}

		$data['mensaje']=$html;

		   $this->load->view('templates/header');
            $this->load->view('Perros/index',$data);
            $this->load->view('templates/footer');
	}


	public function solicitudes(){

		$data['solicitudes'] = $this->mperros->getSolicitudes();

		$this->load->view('templates/header');
        $this->load->view('auth/solicitudes',$data);
        $this->load->view('templates/footer');
	}
	public function info_perros(){

		$data['info_perros'] = $this->mperros->getAllPerros();

		$this->load->view('templates/header');
        $this->load->view('auth/info_perros',$data);
        $this->load->view('templates/footer');
	}


	public function cambiarEstadoAnimalito(){

		$id_perro=$_POST['ID_PERRO'];

		$this->mperros->cambiarEstadoAnimalito($id_perro);


	}
}

/* End of file Addperros.php */
/* Location: ./application/controllers/Addperros.php */