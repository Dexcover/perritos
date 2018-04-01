<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mperros extends CI_Model {

	public $variable;

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}


	public function ingresar($name,$edad,$descripcion,$raza,$estado,$foto, $sexo){

		$this->db->where('nombre_perro', $name);
		$this->db->where('edad_perro', $edad);
		$this->db->where('sexo', $sexo);
		$this->db->where('foto', $foto);
		$query=$this->db->get('perros');
		$pass=false;
		foreach ($query->result() as $row) {
			$pass=true;
		}

		if($pass){
			return true;
		}else{
		$data = array(
			'NOMBRE_PERRO'=>$name,
			'EDAD_PERRO'=>$edad,
			'DESC_PERRO'=>$descripcion,
			'RAZA'=>$raza,
			'FOTO'=>$foto,
			'SEXO'=>$sexo
		 );

		$this->db->insert('perros', $data);

		return $pass;

		}

	}
	public function get_Perros()
	{
		$sql='SELECT * from perros where estado=0;';
        $query=$this->db->  query($sql);
        return $query->result_array();
	}
	public function get_PerrosId($id_perro=null)
	{
		$sql='SELECT * from perros where id_perro=?';
        $query=$this->db->  query($sql, array($id_perro));
        return $query->row_array();
	}


	public function reservar($id_perro,$nombre,$apellidos,$cedula,$edad,$sexo,$direccion,$telefono){

		$this->db->where('cedula', $cedula);
		$this->db->where('id_perro', $id_perro);
		$query=$this->db->get('solicitud');
		$pass=false;
		foreach ($query->result() as $row) {
			$pass=true;
		}

		if($pass){
			return true;
		}else{

		$data = array('ID_PERRO' => $id_perro,
			'NOMBRE_ADOPTANTE'=>$nombre,
			'APELLIDO_ADOPTANTE'=>$apellidos,
			'CEDULA'=>$cedula,
			'EDAD'=>$edad,
			'SEXO_ADOPTANTE'=>$sexo,
			'DIRECCION'=>$direccion,
			'TELEFONO'=>$telefono
		 );
 		
 		 $this->db->insert('solicitud', $data);

 		 return $pass;
 		}
	
	}


	public function getSolicitudes(){

		$sql = "SELECT perros.ID_PERRO,perros.FOTO,`APELLIDO_ADOPTANTE`,`CEDULA`,`EDAD`,`SEXO_ADOPTANTE`,`DIRECCION`,`TELEFONO`,perros.ESTADO FROM solicitud, perros WHERE perros.id_perro=solicitud.ID_PERRO AND perros.ESTADO=0";
        $query=$this->db->  query($sql);
        return $query->result_array();
	}
	public function getAllPerros(){

		$sql = "SELECT * from perros";
        $query=$this->db->  query($sql);
        return $query->result_array();
	}

	public function cambiarEstadoAnimalito($id_perro){

		$data = array(
               'ESTADO' => 1,
            );

		$this->db->where('ID_PERRO', $id_perro);
		$this->db->update('perros', $data); 


	}
}

/* End of file Mperros.php */
/* Location: ./application/models/Mperros.php */