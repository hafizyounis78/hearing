<?php

class Nurse_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vital_signs_model');
        $this->load->model('Register_model');
        $this->load->model('Doctor_model');



	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "شاشة التمريض";
		$this->data['menu'] = "شاشة التمريض";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function nurse_vw()
	{
       $P_DOC_TYPE_ID = $_SESSION["PATIENT_DOCUMENT_TYPE"];
       $P_DOC_ID = $_SESSION["PATIENT_DOCUMENT_ID"];
       $this->data['GET_PERSON_INFO'] = $this->Register_model->GET_PERSON_INFO($P_DOC_TYPE_ID,$P_DOC_ID);

	}


       public function GET_VISIT_DIAGNOSIS()
	{
        $res = $this->Doctor_model->GET_VISIT_DIAGNOSIS();
        $i = 1;
//              print_r($res);
//              exit;
         foreach ($res as $row) {
            $html = $html . '<div class="kt-widget16__item">
				         	 <span class="">' . $row['ICD_CODE'] . '</span>
                             <span class="">' . $row['DIAGNOSIS_DESC'] . '</span>';
                             $html = $html . '</div>';
            $i++;
        }
        $html = $html . '';
        echo $html;
	}


       public function GET_VISIT_DISPOSITION()
	{
        $res = $this->Doctor_model->GET_VISIT_DISPOSITION();
        $i = 1;
//              print_r($res);
//              exit;
         foreach ($res as $row) {
            $html = $html . '<div class="kt-widget16__item">
				         	 <span class="">' . $row['DISPOSITION_DESC'] . '</span>';
                             $html = $html . '</div>';
            $i++;
        }
        $html = $html . '';
        echo $html;
	}



      public function UPDATE_VISIT_MANAGEMENT_DONE()
	{
        extract($_POST);
        $result = $this->Doctor_model->UPDATE_VISIT_MANAGEMENT_DONE($RTC_VISIT_MANAGEMENT_ID);
       /*  echo $result['PR_RESULT'];
        exit; */

		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}

      public function GET_VISIT_MANAGEMENT()
	{
        $res = $this->Doctor_model->GET_VISIT_MANAGEMENT();
        $i = 1;
//              print_r($res);
//              exit;
         foreach ($res as $row) {
            $html = $html . '<div class="kt-widget16__item">
				         	 <span class="">' . $row['MANAGEMENT_DESC'] . '</span>
                             <span class="">' . $row['ORDER_BY_NAME'] . '</span>';
                             if ($row['DONE_BY'] == ""){
                             $html = $html . '<span class=""><button type="button" class="btn  btn-sm  btn-success btn-elevate btn-icon" onClick="UPDATE_VISIT_MANAGEMENT_DONE(' . $row['RTC_VISIT_MANAGEMENT_ID'] . ')"><i class="la la-check"></i></button></span>';
                               }else{
                             $html = $html . '<span class="">DONE</span>';
                             }
                             $html = $html . '</div>';
            $i++;
        }
        $html = $html . '';
        echo $html;
	}

      public function GET_DOCTOR_ASSESSMENT()
	{
        extract($_POST);
        $result = $this->Doctor_model->GET_DOCTOR_ASSESSMENT();
/*         print_r($result['DOCTOR_ASSESSMENT']);
        echo 'saleh';
        exit();  */
        echo json_encode($result);
	}



    }
?>
