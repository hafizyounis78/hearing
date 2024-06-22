<?php

class Register_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');

	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "تسجيل زيارة جديدة";
		$this->data['menu'] = "تسجيل زيارة جديدة";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function register_patient_vw()
	{

	}

    public function get_person_info()
	{
        extract($_POST);
        $result = $this->data['GET_PERSON_INFO'] = $this->Register_model->GET_PERSON_INFO($P_DOC_TYPE_ID,$P_DOC_ID);
        echo json_encode($result);
	}

      public function CHECK_VISIT_TODAY()
	{
        extract($_POST);
        $result = $this->Register_model->CHECK_VISIT_TODAY($P_DOC_ID);
        echo json_encode($result);
	}

    public function insert_visit_corona()
	{
        extract($_POST);
        $result = $this->Register_model->INSERT_VISIT_CORONA($PERSON_SERIAL_ID,$CURRENT_ADDRESS,$MOBILE_NUM,$PHONE_NUM);
     /*    echo $result['PR_RESULT'];
        exit; */
        $visit_id = $result['P_RTC_VISIT_ID'];
        /* echo $visit_id;
        exit(); */
      if ($COMPANION_LIST[0]['serial'] != ''){
         foreach ($COMPANION_LIST as $row) {
             $row_serial=$row['serial'];
             $row_phone=$row['phone'];
            $result2 = $this->Register_model->INSERT_VISIT_COMPANION($visit_id,$row_serial,$row_phone);
        }
    }

		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));

	}

        public function VISIT_DISCHARGE_CORONA()
	{
        extract($_POST);
        $P_REFERRED_BY = $_SESSION["my_ID"];
        $result = $this->Register_model->VISIT_DISCHARGE_CORONA($P_DISCHARGE_DATE_TIME,$P_DISCHARGE_DISPOSITION_ID,$P_REFERRED_TO_FACILITY_TYPE_ID,$P_REFERRED_TO_FACILITY_ID,$P_REFERRAL_REASON,$P_REFERRED_BY);

		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));

	}

         public function UPDATE_VISIT_STATUS()
	{
        date_default_timezone_set('Asia/Gaza');
        $P_DISCHARGE_DATE_TIME = date("yy-m-d H:i");
        $P_REFERRED_BY = '';
        extract($_POST);
        $result = $this->Register_model->UPDATE_VISIT_STATUS($STATUS);
        $result2 = $this->Register_model->VISIT_DISCHARGE_CORONA($P_DISCHARGE_DATE_TIME,$P_DISCHARGE_DISPOSITION_ID,$P_REFERRED_TO_FACILITY_TYPE_ID,$P_REFERRED_TO_FACILITY_ID,$P_REFERRAL_REASON,$P_REFERRED_BY);
		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تم انهاء الجلسة بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}

    }
?>
