<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends 	CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('mperros');
	}

	public function index()
	{
			$this->load->view('layout/header');
			$this->load->view('home/index');
			$this->load->view('layout/footer'); 
	}

	public function gal_perros()
    {
        $data['perros'] = $this->mperros->get_Perros();
        $this->load->view('layout/header');
        $this->load->view('home/gal_perros',$data);
        $this->load->view('layout/footer');
    }
    public function sel_perro($id = NULL)
    {
        $data['perros_item'] = $this->mperros->get_PerrosId($id);
        $this->load->view('layout/header');
        $this->load->view('home/sel_perro',$data);
        $this->load->view('layout/footer');
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */