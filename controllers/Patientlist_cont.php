<?php

class Patientlist_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Patient_model');
        $this->load->model('User_model');


	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "قائمة المرضى";
		$this->data['menu'] = "قائمة المرضى";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function patientlist_vw()
	{

	}
    
    	public function patientlist_doctor_vw()
	{

	}
    
       	public function patientlist_nurse_vw()
	{

	}
    
    public function patientlist_all_vw()
	{

  $this->data['GET_C_RTC_CENTER_PR'] = $this->User_model->GET_C_RTC_CENTER_PR();

	}
    
      public function patientlist_all_center_vw()
	{

	}



     public function PATIENT_LIST_DATA()
	{
        extract($_POST);
        $res = $this->Patient_model->GET_PATIENT_LIST_DATA($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME);
        $i = 1;
        foreach ($res as $row) {
         $originalDate = $row['DOB'] ;
         $birth_date = date("d/m/Y H:i", strtotime($originalDate));
         $birthDate = $row['DOB'];
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));

            $html = $html . '<tr ondblclick="GET_PATIENT_DETAILS('.$row['RTC_VISIT_ID'].','.$row['PERSON_SERIAL_ID'].','.$row['DOCUMENT_ID'].','.$row['DOCUMENT_TYPE_ID'].')"><td>' . $i . '</td>
				         	 <td id="name">' . $row['PERSON_SERIAL_ID'] . '</td>
							 <td>' . $row['DOCUMENT_ID'] . '</td>
                              <td>' . $row['PATIENT_NAME'] . '</td>
                             <td>' . $row['SEX'] . '</td>
                             <td> Y ' . $age . ' </td>
							 <td>' .  $row['RTC_VISIT_ID'] . '</td>
                             <td>' .  $row['ARRIVAL_DATE_TIME'] . '</td>';
                             if ($row['VISIT_SATUS_ID'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                               }else if ($row['VISIT_SATUS_ID'] == 2){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                             }else if ($row['VISIT_SATUS_ID'] == 3){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                             }

                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}
    
      public function PATIENT_DOCTOR_LIST_DATA()
	{
        extract($_POST);
        $res = $this->Patient_model->GET_PATIENT_LIST_DATA($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME);
        $i = 1;
        foreach ($res as $row) {
         $originalDate = $row['DOB'] ;
         $birth_date = date("d/m/Y", strtotime($originalDate));
         $birthDate = $row['DOB'];
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));

            $html = $html . '<tr ondblclick="GET_PATIENT_DOCTOR_DETAILS('.$row['RTC_VISIT_ID'].','.$row['PERSON_SERIAL_ID'].','.$row['DOCUMENT_ID'].','.$row['DOCUMENT_TYPE_ID'].')"><td>' . $i . '</td>
				         	 <td id="name">' . $row['PERSON_SERIAL_ID'] . '</td>
							 <td>' . $row['DOCUMENT_ID'] . '</td>
                              <td>' . $row['PATIENT_NAME'] . '</td>
                             <td>' . $row['SEX'] . '</td>
                             <td> Y ' . $age . ' </td>
							 <td>' .  $row['RTC_VISIT_ID'] . '</td>
                             <td>' .  $row['ARRIVAL_DATE_TIME'] . '</td>';
                               if ($row['VISIT_SATUS_ID'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                               }else if ($row['VISIT_SATUS_ID'] == 2){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                             }else if ($row['VISIT_SATUS_ID'] == 3){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                             }
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}

         public function PATIENT_MANAGEMENT_PLAN_LIST_DATA()
	{
        extract($_POST);
        $res = $this->Patient_model->GET_PATIENT_LIST_DATA($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME);
        $i = 1;
        foreach ($res as $row) {
         $originalDate = $row['DOB'] ;
         $birth_date = date("d/m/Y", strtotime($originalDate));
         $birthDate = $row['DOB'];
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));

            $html = $html . '<tr ondblclick="GET_PATIENT_MANAGEMENT_PLAN_DETAILS('.$row['RTC_VISIT_ID'].','.$row['PERSON_SERIAL_ID'].','.$row['DOCUMENT_ID'].','.$row['DOCUMENT_TYPE_ID'].')"><td>' . $i . '</td>
				         	 <td id="name">' . $row['PERSON_SERIAL_ID'] . '</td>
							 <td>' . $row['DOCUMENT_ID'] . '</td>
                              <td>' . $row['PATIENT_NAME'] . '</td>
                             <td>' . $row['SEX'] . '</td>
                             <td> Y ' . $age . ' </td>
							 <td>' .  $row['RTC_VISIT_ID'] . '</td>
                             <td>' .  $row['ARRIVAL_DATE_TIME'] . '</td>';
                              if ($row['VISIT_SATUS_ID'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                               }else if ($row['VISIT_SATUS_ID'] == 2){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                             }else if ($row['VISIT_SATUS_ID'] == 3){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">' . $row['VISIT_STATUS_DESC'] . '</span></td>';
                             }
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}
    
    
    

        public function PATIENT_ALL_LIST_DATA()
	{
        extract($_POST);
        $res = $this->Patient_model->GET_PATIENT_ALL_LIST_DATA($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME,$RTC_CENTER_ID,$P_FROM_DATE,$P_TO_DATE,$COVID_SUS);
        $i = 1;
        foreach ($res as $row) {
         $originalDate = $row['DOB'] ;
         $birth_date = date("d/m/Y", strtotime($originalDate));
         $birthDate = $row['DOB'];
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));

            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td id="name">' . $row['PERSON_SERIAL_ID'] . '</td>
							 <td>' . $row['DOCUMENT_ID'] . '</td>
                              <td>' . $row['PATIENT_NAME'] . '</td>
                              <td>' . $row['MOBILE_NUM'] . '</td>
                              <td>' . $row['CURRENT_ADDRESS'] . '</td>
                             <td>' . $row['SEX'] . '</td>
                             <td> Y ' . $age . ' </td>
							 <td>' .  $row['RTC_VISIT_ID'] . '</td>
                             <td>' .  $row['ARRIVAL_DATE_TIME'] . '</td>
                             <td>' .  $row['RTC_CENTER_NAME_AR'] . '</td>';
                               if ($row['SUSPECTED_COVID'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">مشتبه بالاصابة</span></td>';
                               }else if ($row['SUSPECTED_COVID'] == 2){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">غير مشتبه بالاصابة</span></td>';
                             }else{
                             $html = $html . '<td><span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">غير مشخص</span></td>';
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
    

    public function PATIENT_ALL_CENTER_LIST_DATA()
	{
        extract($_POST);
        $RTC_CENTER_ID = $_SESSION["RTC_CENTER_ID"];
        $res = $this->Patient_model->GET_PATIENT_ALL_LIST_DATA($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME,$RTC_CENTER_ID,$P_FROM_DATE,$P_TO_DATE,$COVID_SUS);
        $i = 1;
        foreach ($res as $row) {
         $originalDate = $row['DOB'] ;
         $birth_date = date("d/m/Y", strtotime($originalDate));
         $birthDate = $row['DOB'];
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));

            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td id="name">' . $row['PERSON_SERIAL_ID'] . '</td>
							 <td>' . $row['DOCUMENT_ID'] . '</td>
                              <td>' . $row['PATIENT_NAME'] . '</td>
                              <td>' . $row['MOBILE_NUM'] . '</td>
                              <td>' . $row['CURRENT_ADDRESS'] . '</td>
                             <td>' . $row['SEX'] . '</td>
                             <td> Y ' . $age . ' </td>
							 <td>' .  $row['RTC_VISIT_ID'] . '</td>
                             <td>' .  $row['ARRIVAL_DATE_TIME'] . '</td>
                             <td>' .  $row['RTC_CENTER_NAME_AR'] . '</td>';
                               if ($row['SUSPECTED_COVID'] == 1){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">مشتبه بالاصابة</span></td>';
                               }else if ($row['SUSPECTED_COVID'] == 2){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">غير مشتبه بالاصابة</span></td>';
                             }else{
                             $html = $html . '<td><span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">غير مشخص</span></td>';
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




     function senddata()
    {
        extract($_POST);
        $_SESSION['VISIT_ID'] = $VISIT_ID;
        $_SESSION['PATIENT_SERIAL'] = $PATIENT_SERIAL;
        $_SESSION['PATIENT_DOCUMENT_ID'] = $PATIENT_DOCUMENT_ID;
        $_SESSION['PATIENT_DOCUMENT_TYPE'] = $PATIENT_DOCUMENT_TYPE;

   /*      $_SESSION['PATIENT_NAME'] = $PATIENT_NAME;
        $_SESSION['PATIENT_SEX'] = $PATIENT_SEX;
        $_SESSION['PATIENT_DOB'] = $PATIENT_DOB;
        $_SESSION['PATIENT_AGE'] = $PATIENT_AGE; */


    }

    }
?>
