<?php

class Patient_move_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
// 		$this->load->model('Patient_model', "CORONA_PATIENT");

	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "استعلام حركات مرضى الكورونا";
		$this->data['menu'] = "استعلام حركة مريض";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function patientmove_vw()
	{

	}
    }
?>
