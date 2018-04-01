<?php

class Pages extends CI_Controller {
	public function view($page = 'home')
	{
	        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))//appatha hasta la application
	        {
	                // Whoops, we don't have a page for that!
	                show_404();
	        }

	        $data['title'] = ucfirst($page); // Capitalize the first letter

	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);

	}
}
//http://localhost:8083/codeigniter/index.php/pages/view
//http://localhost:8083/codeigniter/index.php/pages/view/about
//http://localhost:8083/codeigniter/index.php/about
//http://localhost:8083/codeigniter/
?>