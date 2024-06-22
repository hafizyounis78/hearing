<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forms_cont extends MY_Controller {
    
    public function __construct()
	{
		parent::__construct();
       $this->load->model('Forms_model');
       $this->load->model('Register_model');
       $this->load->model('User_model');



	}

// 	public $data;
    function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/forms/'.$page.'.php'))
		{
			show_404();
		}

       /*  if(!$this->session->userdata('USER_ID')){
        redirect('admin/login');} */
        
       /*  if($_SESSION["my_ID"]!==null || $_SESSION["my_ID"]!== '')
			{ */

        $this->$page();
		$this->data['title'] = "نظام رصد حالات الكورونا الالكتروني";
		$this->data['menu'] = "نظام رصد حالات الكورونا الالكتروني";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/forms/'. $page , $this->data);
		$this->load->view('templates/footer');

				
/* 			}else{
redirect('http://apps.moh.gov.ps/perm/index.php/Login/main_page');
        } */



	}
    
    public function patient_all_vw()
	{
        
    $this->data['GET_USER_LOC_PR'] = $this->User_model->GET_USER_LOC_PR();

	}

	public function patient_forms_vw()
	{

	}

    public function form_infected_vw()
	{

       $P_DOC_TYPE_ID = $_SESSION["PATIENT_DOCUMENT_TYPE"];
       $P_DOC_ID = $_SESSION["PATIENT_DOCUMENT_ID"];
       $this->data['GET_PERSON_INFO'] = $this->Register_model->GET_PERSON_INFO($P_DOC_TYPE_ID,$P_DOC_ID);
       $this->data['GET_RECOMMEND_LIST_PR'] = $this->Forms_model->GET_RECOMMEND_LIST_PR();

	}
    
    public function form_contacted_vw()
	{

       $P_DOC_TYPE_ID = $_SESSION["PATIENT_DOCUMENT_TYPE"];
       $P_DOC_ID = $_SESSION["PATIENT_DOCUMENT_ID"];
       $this->data['GET_PERSON_INFO'] = $this->Register_model->GET_PERSON_INFO($P_DOC_TYPE_ID,$P_DOC_ID);


	}
    
    public function help_vw()
	{
        /* if(!$this->session->userdata('user_id')){
        redirect('admin/login');} */

      if(isset($_SESSION['logged_in'])){
      redirect('http://apps.moh.gov.ps/perm/index.php/Login/main_page');}
	}




     public function GET_INFECTED_PR()
	{
      extract($_POST);
        $res = $this->Forms_model->GET_INFECTED_PR($P_NAME,$P_ID);
//          print_r($res);
//          exit();
        $i = 1;
        foreach ($res as $row) {

         $originalDate = $row['INFECTED_DATE'] ;
         $new_date = date("d/m/Y", strtotime($originalDate));

            $html = $html . '<tr ondblclick="GET_PATIENT_INFECTED_DETAILS('.$row['INFECTED_ID'].',1)"><td>' . $i . '</td>
				         	 <td>' . $row['INFECTED_ID'] . '</td>
							 <td>' . $row['INFECTED_NAME'] . '</td>
                              <td>' . $row['INFECTED_MOBILE'] . '</td>
                             <td>' . $new_date . '</td>
							 <td>' .  $row['REGION_NAME'] . '</td>
                             <td>' .  $row['CITY_NAME'] . '</td>
                             <td>' .  $row['STREET'] . '</td>
                             <td>' .  $row['NEAREST_LOC'] . '</td>
                               <td width="14%" class="text-center"><button type="button" onClick="GET_PATIENT_INFECTED_DETAILS('.$row['INFECTED_ID'].',1)" class="btn btn-primary btn-sm get_name"> تعبئة النموذج</button>';
                              '</td>
                           	';

                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;
	}
    
      public function GET_CONTACTED_PR()
	{
      extract($_POST);
        $res = $this->Forms_model->GET_CONTACTED_PR($P_NAME_CONTACTED,$P_ID_CONTACTED);
//          print_r($res);
//          exit();
        $i = 1;
        foreach ($res as $row) {

         $originalDate = $row['CONTACTED_DATE'] ;
         $new_date = date("d/m/Y", strtotime($originalDate));

            $html = $html . '<tr ondblclick="GET_PATIENT_CONTACTED_DETAILS('.$row['CONTACTED_ID'].',1)"><td>' . $i . '</td>
				         	 <td>' . $row['CONTACTED_ID'] . '</td>
							 <td>' . $row['CONTACTED_NAME'] . '</td>
                              <td>' . $row['CONTACTED_MOBILE'] . '</td>
                             <td>' . $new_date . '</td>
							 <td>' .  $row['REGION_NAME'] . '</td>
                             <td>' .  $row['CITY_NAME'] . '</td>
                               <td width="14%" class="text-center"><button type="button" onClick="GET_PATIENT_CONTACTED_DETAILS('.$row['CONTACTED_ID'].',1)" class="btn btn-primary btn-sm get_name"> تعبئة النموذج</button>';
                              '</td>
                           	';

                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;
	}

     public function INSERT_P_QUESTIONS_ANSWERS()
	{
        extract($_POST);
        $result = $this->Forms_model-> INSERT_P_QUESTIONS_ANSWERS($QUESTION1,$QUESTION1_TEMPERATURE,$QUESTION1_TEMPERATURE_NUM,$QUESTION1_COUGH,$QUESTION1_THROAT,$QUESTION1_SMELLING_TASTING,$QUESTION1_OTHERS,$QUESTION1_OTHERS_SYNDROME,$QUESTION2_BREATHE,$QUESTION2_COUNT_OF_BREATHE,$QUESTION3_CONTACT_PERSONS,$QUESTION3_CONTACT_PERSONS_COUNT,$QUESTION3_CP_HAVE_SYNDROME,$QUESTION3_SAFETY_INSTRUCTIONS,$QUESTION3_SAFETY_MEASURES,$QUESTION4_PULS,$QUESTION4_PULS_COUNT,$RECOMMENDATION,$RECOMMEND_DETAILS,$PERSON_SERIAL);
     /*    echo $result['PR_RESULT'];
        exit; */
        $serial_id = $result['SERIAL_ID_OUT'];
         /* echo $serial_id;
        exit();  */
      if ($CONTACTED_LIST[0]['contact_name'] != ''){
         foreach ($CONTACTED_LIST as $row) {
            $contact_name=$row['contact_name'];
            $result2 = $this->Forms_model->INSERT_P_QUESTIONS_ANSWERS_DETAILS($serial_id,$contact_name);
        }
    }

		if ($result['STATUS_OUT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));

	}

     public function INSERT_CP_QUESTIONS_ANSWERS()
	{
        extract($_POST);
        $result = $this->Forms_model->INSERT_CP_QUESTIONS_ANSWERS($QUESTION1,$QUESTION1_TEMPERATURE,$QUESTION1_TEMPERATURE_NUM,$QUESTION2_COUGH,$QUESTION3_THROAT,$QUESTION4_SMELLING_TASTING,$QUESTION5_OTHERS,$QUESTION5_OTHERS_SYNDROME,$QUESTION6_CONTACT_PERSONS,$QUESTION7_CP_HAVE_SYNDROME,$QUESTION8_SAFETY_INSTRUCTIONS,$QUESTION9_SAFETY_MEASURES,$PERSON_SERIAL);
    /*    echo $result['PR_RESULT'];
        exit; */
        $serial_id = $result['SERIAL_ID_OUT'];
         /* echo $serial_id;
        exit();  */
      if ($CONTACTED_LIST[0]['contact_name'] != ''){
         foreach ($CONTACTED_LIST as $row) {
            $contact_name=$row['contact_name'];
            $result2 = $this->Forms_model->INSERT_CP_QUESTIONS_ANSWER_DETAILS($serial_id,$contact_name);
        }
    }

		if ($result['STATUS_OUT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));

	}
    
        function SEARCH_CITIZEN()
	{
     extract($_POST);
     $res= $this->Forms_model->SEARCH_CITIZEN($IN_ID,$IN_FNAME,$IN_SNAME,$IN_TNAME,$IN_LNAME);
     $i = 1;
     foreach ($res as $row) {

       $html = $html . '<tr onclick="USE_CITIZEN_DETAILS('.$row['ID'].',\'' . $row['FNAME'] . ' ' . $row['SNAME'] . ' ' . $row['TNAME'] . ' ' . $row['LNAME'] . '\')" style="cursor:pointer"><td>' . $i . '</td>
				         	 <td>' . $row['ID'] . '</td>
				         	 <td>' . $row['FNAME'] . ' ' . $row['SNAME'] . ' ' . $row['TNAME'] . ' ' . $row['LNAME'] . '</td>
                             <td>' . $row['BIRTH_DT'] . '</td>';
                             $html = $html . '</tr>';
            $i++;
         }
        $html = $html . '';
        echo $html;
 	}
    
     public function INSERT_COVID19_CONTACTED()
	{
        extract($_POST);
        $result = $this->Forms_model->INSERT_COVID19_CONTACTED($P_CONTACTED_ID,$P_CONTACTED_NAME,$P_CONTACTED_MOBILE,$P_INFECTED_ID,$P_NEAREST_LOC,$P_IDENTIFICATION_TYPE,$P_PASSPORT_TYPE,$P_IDENTIFIER_ID,$P_IDENTIFIER_NAME);
          	if ($result['RESULT_INSERT'] > 0)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
       else if ($result['RESULT_INSERT'] == 0)
            echo json_encode(array('status' => false, 'message' => 'بيانات المخالط موجودة مسبقاً' , 'type' => 'success'));
		else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}
    
    
    public function GET_ALL_VISIT_PATIENT()
	{
        extract($_POST);
        $res = $this->Forms_model->GET_ALL_VISIT_PATIENT($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME,$P_FROM_DATE,$P_TO_DATE,$P_COVID,$P_LOC_ID,$P_FROM_TEM_NUM,$P_TO_TEM_NUM,$P_FROM_BREATHE_NUM,$P_TO_BREATHE_NUM,$P_FROM_PULS_NUM,$P_TO_PULS_NUM);
//        print_r($res);
//         exit();
        $i = 1;
        foreach ($res as $row) {
            $visit_date = $row['VISIT_DATE'];
            $new_visit_data = date("d/m/Y", strtotime($visit_date));
         $originalDate = $row['DOB'] ;
//          $birth_date = date("d/m/Y", strtotime($originalDate));
         $birthDate = date("d/m/Y", strtotime($originalDate));
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));

            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td id="name">' . $row['DOCUMENT_ID'] . '</td>
                             <td>' . $row['FIRST_NAME'] .' ' . $row['SECOND_NAME'] . ' ' . $row['THIRD_NAME'] . ' ' . $row['LAST_NAME'] . '</td>';
                             if ($row['SEX_ID'] == 1){
                             $html = $html . '<td>ذكر</td>';
                               }else{
                             $html = $html . '<td>انثى</td>';
                             }
                             $html = $html .'<td>Y ' .  $age . '</td>';
                            if ($row['PATIENT_TYPE'] == 1){
                             $html = $html . '<td>' .  $row['QUESTION1_TEMPERATURE_NUM'] . '</td>';
                               }else{
                             $html = $html . '<td>' .  $row['CP_TEMP_NUM'] . '</td>';
                             }
                             $html = $html . '<td>' .  $row['QUESTION2_COUNT_OF_BREATHE'] . '</td>
                             <td>' .  $row['QUESTION4_PULS_COUNT'] . '</td>
                             <td>' .  $new_visit_data . '</td>
                             <td>' .  $row['LOC_NAME_AR'] . '</td>';
                               if ($row['PATIENT_TYPE'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">مصاب</span></td>';
                               }else{
                             $html = $html . '<td><span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">مخالط</span></td>';
                             }
              /* if ($row['SEVERITY_ID'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Mild</span></td>';
                               }else if ($row['SEVERITY_ID'] == 2){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Moderate</span></td>';
                             }else if ($row['SEVERITY_ID'] == 3){
                             $html = $html . '<td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Severe</span></td>';
                             } */
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}









}