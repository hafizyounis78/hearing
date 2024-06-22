<?php

class Lab_result_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lab_result_model');
	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "احصائية عامة لنتائج المختبر المركزي";
		$this->data['menu'] = "احصائية عامة لنتائج المختبر المركزي";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function lab_result_count_vw()
	{

	}
    
    
          public function GET_LAB_RESULT_COUNT()
	{
        extract($_POST);
        $result = $this->Lab_result_model-> GET_LAB_RESULT_COUNT($P_FROM_DATE,$P_TO_DATE,$P_RESULT_TYPE);
/*         print_r($result['DOCTOR_ASSESSMENT']);
        echo 'saleh';
        exit();  */
        echo json_encode($result);
	}



    }
?>