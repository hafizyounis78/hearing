<?php

class Vitalsigns_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vital_signs_model');
        $this->load->model('Register_model');


	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "إدخال العلامات الحيوية";
		$this->data['menu'] = "إدخال العلامات الحيوية";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function vital_signs_vw()
	{
       $P_DOC_TYPE_ID = $_SESSION["PATIENT_DOCUMENT_TYPE"];
       $P_DOC_ID = $_SESSION["PATIENT_DOCUMENT_ID"];
       $this->data['GET_PERSON_INFO'] = $this->Register_model->GET_PERSON_INFO($P_DOC_TYPE_ID,$P_DOC_ID);
	}

         public function GET_PATIENT_VITAL_SIGNS()
	{
        date_default_timezone_set('Asia/Gaza');
        $res = $this->Vital_signs_model->GET_PATIENT_VITAL_SIGNS();
        $i = 1;
//              print_r($res);
//              exit;
        foreach ($res as $row) {
         $originalDate = $row['VITAL_SIGNS_DATE_TIME'] ;
         $newDate = date("d/m/yy", strtotime($originalDate));
         $current_date= date("d/m/yy");
            $html = $html . '<tr scope="row"><th>' . $i . '</th>
				         	 <td>' . $row['TEMP'] . '</td>
							 <td>' . $row['BP_SYSTOLIC'] . ' / ' . $row['BP_DIASTOLIC'] . '</td>
                             <td>' . $row['PR'] . '</td>
                             <td>' . $row['RR'] . '</td>
							 <td>' .  $row['SAO2'] . '</td>
                             <td>' .  $row['GCS'] . '</td>
                             <td>' .  $row['ON_ARRIVAL_OR_DISCHARGE'] . '</td>
                             <td>' .  $row['VITAL_SIGNS_DATE_TIME'] . '</td>
                             <td>' .  $row['DONE_BY'] . '</td>
                             <td>';
                             if ($newDate == $current_date){
                             $html = $html . '<button type="button" class="btn  btn-sm  btn-brand btn-elevate btn-icon" onClick="GET_THIS_VITAL_SIGNS(' . $row['RTC_VITAL_SIGNS_ID'] . ')"><i class="la la-edit"></i></button> &nbsp<button type="button" class="btn  btn-sm  btn-danger btn-elevate btn-icon" onClick="DELETE_VITAL_SIGNS(' . $row['RTC_VITAL_SIGNS_ID'] . ')"><i class="la la-trash"></i></button></td>';
                               }
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}

             public function GET_VISIT_VITAL_SIGNS()
	{
        date_default_timezone_set('Asia/Gaza');
        $res = $this->Vital_signs_model->GET_VISIT_VITAL_SIGNS();
        $i = 1;
//              print_r($res);
//              exit;
        foreach ($res as $row) {
         $originalDate = $row['VITAL_SIGNS_DATE_TIME'] ;
         $newDate = date("d/m/yy", strtotime($originalDate));
         $current_date= date("d/m/yy");
            $html = $html . '<tr scope="row"><th>' . $i . '</th>
				         	 <td>' . $row['TEMP'] . '</td>
							 <td>' . $row['BP_SYSTOLIC'] . ' / ' . $row['BP_DIASTOLIC'] . '</td>
                             <td>' . $row['PR'] . '</td>
                             <td>' . $row['RR'] . '</td>
							 <td>' .  $row['SAO2'] . '</td>
                             <td>' .  $row['GCS'] . '</td>
                             <td>' .  $row['ON_ARRIVAL_OR_DISCHARGE'] . '</td>
                             <td>' .  $row['VITAL_SIGNS_DATE_TIME'] . '</td>
                             <td>' .  $row['DONE_BY'] . '</td>
                             <td>';
                             if ($newDate == $current_date){
                             $html = $html . '<button type="button" class="btn  btn-sm  btn-brand btn-elevate btn-icon" onClick="GET_THIS_VITAL_SIGNS(' . $row['RTC_VITAL_SIGNS_ID'] . ')"><i class="la la-edit"></i></button> &nbsp<button type="button" class="btn  btn-sm  btn-danger btn-elevate btn-icon" onClick="DELETE_VITAL_SIGNS(' . $row['RTC_VITAL_SIGNS_ID'] . ')"><i class="la la-trash"></i></button></td>';
                               }
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}
    
      public function GET_VISIT_REPORT_VITAL_SIGNS()
	{
        $result = $this->Vital_signs_model->GET_VISIT_VITAL_SIGNS();
        echo json_encode($result);
	}





        public function insert_vital_signs()
	{
        extract($_POST);
        $STATUS=2;
        $result = $this->Vital_signs_model->INSERT_VITAL_SIGNS($P_TEMP,$P_BP_SYSTOLIC,$P_BP_DIASTOLIC,$P_PR,$P_RR,$P_SAO2,$P_GCS,$P_ON_ARRIVAL_OR_DISCHARGE);
        $result22 = $this->Register_model->UPDATE_VISIT_STATUS($STATUS);
            /*  echo $result['PR_RESULT'];
        exit; */

		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}
    
        public function update_vital_signs()
	{
        extract($_POST);
        $result = $this->Vital_signs_model->UPDATE_VITAL_SIGNS($P_RTC_VITAL_SIGNS_ID,$P_TEMP,$P_BP_SYSTOLIC,$P_BP_DIASTOLIC,$P_PR,$P_RR,$P_SAO2,$P_GCS,$P_ON_ARRIVAL_OR_DISCHARGE);
       /* echo $result['PR_RESULT'];
        exit; */

		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}

        public function GET_THIS_VITAL_SIGNS()
	{
        extract($_POST);
        $result = $this->Vital_signs_model->GET_THIS_VITAL_SIGNS($RTC_VITAL_SIGNS_ID);
        echo json_encode($result);
	}

       public function DELETE_VITAL_SIGNS()
	{
        extract($_POST);
        $result = $this->Vital_signs_model->DELETE_VITAL_SIGNS($RTC_VITAL_SIGNS_ID);

		if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}

    }
?>
