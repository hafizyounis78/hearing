<?php

class Patient_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Patient_model');
        $this->load->model('Constant_model');

    }

    function patient_list_vw()
    {

    }

    function referral_patient_list()
    {

    }

    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "فتح سجل مريض جديد";
        $this->data['menu'] = "اضافة بيانات مريض";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');

    }


    public function addpatient()
    {
        $this->data['doc_type_list'] = $this->get_lookups(92, 1);//lookups
        $this->data['national_list'] = $this->get_lookups(2, 1);//lookups
        $this->data['sex_list'] = $this->get_lookups(89, 1);//lookups
        $this->data['district_list'] = $this->Constant_model->get_geolocation_list(2);//lookups
        $this->data['center_name'] = $_SESSION["my_activ_LOCATIONS"]['LOC_NAME'];
    }

    public function get_city()
    {
        $city_list = $this->Constant_model->get_geolocation_list($this->input->post('DISTRICT_ID'));//lookups
        $html = '<option value="">Select..</option>';
        foreach ($city_list as $row)
            $html .= '<option value="' . $row['GEOLOCATION_ID'] . '">' . $row['NAME_AR'] . '</option>';
        echo $html;
    }

    public function get_city_by_district($DISTRICT_ID, $CITY_ID)//تستخدم لجلب قائمة المدن في حالة الجيسون لما يعمل فحص لرقم الهوية
    {
        //echo 'CITY_ID : '.$CITY_ID;
        $city_list = $this->Constant_model->get_geolocation_list($DISTRICT_ID);//lookups
        // print_r($city_list);exit;
        $html = '<option value="">Select..</option>';
        $selected = '';
        foreach ($city_list as $row) {
            $selected = '';
            if ($CITY_ID == $row['GEOLOCATION_ID']) {
                $selected = 'selected';
            }
            $html .= '<option value="' . $row['GEOLOCATION_ID'] . '" ' . $selected . '>' . $row['NAME_AR'] . '</option>';
        }
        return $html;
    }

    function chk_patientId()
    {
        $row = $this->Patient_model->chk_patient_id();
        //  print_r($row);exit;
        $arr = array();
        $temp = array();
        // foreach ($data as $row) {

        //  $temp['PERSON_SERIAL_ID'] = $row['PERSON_SERIAL_ID'];
        if ($this->input->post('DOCUMENT_TYPE_ID') == 93) {
            $temp['FIRST_NAME'] = $row['P_FNAME'];
            $temp['SECOND_NAME'] = $row['P_SNAME'];
            $temp['THIRD_NAME'] = $row['P_TNAME'];
            $temp['LAST_NAME'] = $row['P_LNAME'];
            $temp['DOB'] = $row['P_DOB'];
            $temp['SEX_ID'] = $row['P_SEX_CODE_CD'];
            $temp['DISTRICT_ID'] = $row['P_REGION_CODE_ID'];
            $temp['CITY_ID'] = $row['P_CITY_CODE_ID'];// $this->get_city_by_district($row['DISTRICT_ID'],$row['CITY_ID']);
            $temp['CURRENT_ADDRESS'] = $row['P_STR'];
            $temp['MOBILE_NUM'] = $row['MOBILE_NUM'];
            $temp['PHONE_NUM'] = $row['PHONE_NUM'];
            $temp['MOTHER_ID'] = $row['P_MOTH_ID'];
            $temp['MOTHER_NAME'] = $row['MOTHER_NAME'];
            $temp['MOTHER_AGE'] = $row['MOTHER_AGE'];
            $temp['MONTHLY_INCOME'] = $row['MONTHLY_INCOME'];
            $temp['CITIZENSHIP'] = $row['P_PERSONALITY'];
            $temp['FAMILY_CARD'] = $row['FAMILY_CARD'];
            $temp['CENTER_NAME'] = $row['CENTER_NAME'];
        } else {
            $temp['CITIZENSHIP'] = $row['P_PERSONALITY'];
            $temp['MOBILE_NUM'] = $row['MOBILE_NUM'];
            $temp['PHONE_NUM'] = $row['PHONE_NUM'];
            $temp['MOTHER_ID'] = $row['P_MOTH_ID'];
            $temp['DISTRICT_ID'] = $row['P_REGION_CODE_ID'];
            $temp['CITY_ID'] = $row['P_CITY_CODE_ID'];// $this->get_city_by_district($row['DISTRICT_ID'],$row['CITY_ID']);
            $temp['CURRENT_ADDRESS'] = $row['P_STR'];
            $temp['MOTHER_NAME'] = $row['P_FNAME'] . ' ' . $row['P_SNAME'] . ' ' . $row['P_TNAME'] . ' ' . $row['P_LNAME'];
        }
        //  }
        array_push($arr, $temp);
        echo json_encode($arr);
    }

    function save_patient_cont()
    {
        /*  if ($this->input->post('DOCUMENT_TYPE_ID') == 93)//هوية فلسطينية
              $rec = $this->Patient_model->update_patient();
          else//جواز سفر*/
        $rec = $this->Patient_model->insert_patient();
        $arr = array();
        $temp = array();
        if ($rec['result'] == 1)
            $visit = $this->Patient_model->insert_new_visit($rec['PERSON_SERIAL_ID']);
        echo $visit['result'];
        //echo json_encode($rec);
    }

    function edit_patient_cont()
    {
        $rec = $this->Patient_model->update_patient();
        echo $rec;
    }

    function update_patient_id_cont()
    {
        $rec = $this->Patient_model->update_patient_id();
        echo $rec;
    }

    public function getPatientData()
    {

        extract($_POST);

        $patient_id = $this->input->post('patient_id');
        $patient_name = $this->input->post('patient_name');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $p_show = $this->input->post('p_show');

        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "CENTER_NAME_AR",
            4 => "VISIT_TYPE",
            5 => "STATUS_NAME",
            6 => "VISIT_DATE",
            7 => "Actions",
        );

// 1. Order
        $post_order = $_POST['order'];    // Array
        //   $order = $columns[$post_order[0]['column']];
        $order = $columns[1];
        $dir = $post_order[0]['dir'];

        $draw = $_POST['draw'];

        // 2. Start & Limit
        $limit = $_POST['length'];
        $start = $_POST['start'];

        // 3. Quick Search
        /* $search_post = $_POST['search'];	// Array
         $search = '';send_data
         $search = $search_post['value'];*/
        /*
        if(($E_DATE_FROM !=''||$E_DATE_FROM!=null) &&($E_DATE_TO==''||$E_DATE_TO==null )) {

            $E_DATE_TO = $E_DATE_FROM;
        }
      */
        // 4. Totla Files Count
        $totalRecords = $this->Patient_model->getPatientRecordsCount($patient_id, $patient_name, $from_date, $to_date, $p_show);

        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Patient_model->getPatientRecords($patient_id, $patient_name, $from_date, $to_date, $p_show, $limit, $start, $order, $dir);

        // $html = '';
        $i = 0;
        $data = array();
        //print_r($this->data['get_patient']); exit();

        foreach ($this->data['get_patient'] as $row) {

            //  $action = '<span style="overflow: visible; position: relative; width: 110px;"><a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a></span>';
            $data[] = array(
                'no' => ++$i,
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'CENTER_NAME_AR' => $row['NAME_AR'],
                'VISIT_TYPE' => $row['VISIT_TYPE'],
                'STATUS_NAME' => $row['VISIT_SATUS_ID'],
                'VISIT_DATE' => $row['VISIT_DATE_CHAR'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'VISIT_ATTEND_CD' => $row['VISIT_ATTEND_CD'],
                'ACTION' => $row['VISIT_ID'],

            );


        }
        // print_r( $data); exit();

        $draw = $_POST['draw'];
        $json_data = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );


        echo json_encode($json_data);

    }

    public function getMedicalFileData()
    {

        extract($_POST);

        $patient_id = $this->input->post('patient_id');
        $patient_name = $this->input->post('patient_name');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_SERIAL_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "CENTER_NAME_AR",
            4 => "VISIT_TYPE",
            5 => "STATUS_NAME",
            6 => "VISIT_DATE",
            7 => "Actions",
        );

// 1. Order
        $post_order = $_POST['order'];    // Array
        //   $order = $columns[$post_order[0]['column']];
        $order = $columns[1];
        $dir = $post_order[0]['dir'];

        $draw = $_POST['draw'];

        // 2. Start & Limit
        $limit = $_POST['length'];
        $start = $_POST['start'];

        // 3. Quick Search
        /* $search_post = $_POST['search'];	// Array
         $search = '';send_data
         $search = $search_post['value'];*/
        /*
        if(($E_DATE_FROM !=''||$E_DATE_FROM!=null) &&($E_DATE_TO==''||$E_DATE_TO==null )) {

            $E_DATE_TO = $E_DATE_FROM;
        }
      */
        // 4. Totla Files Count
        $totalRecords = $this->Patient_model->getMedicalFileRecordsCount($patient_id, $patient_name);

        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Patient_model->getMedicalFileRecords($patient_id, $patient_name, $limit, $start, $order, $dir);

        // $html = '';
        $i = 0;
        $data = array();
        //print_r($this->data['get_patient']); exit();

        foreach ($this->data['get_patient'] as $row) {
            /*  if($row['VISIT_SATUS_ID']==82)
                 $STATUS_NAME='<span style="width: 137px;"><span class="label font-weight-bold label-lg label-light-info label-inline">'.$row['STATUS_NAME'].'</span></span>';
              else if($row['VISIT_SATUS_ID']==83)
                  $STATUS_NAME='<span style="width: 137px;"><span class="label font-weight-bold label-lg label-light-danger label-inline">'.$row['STATUS_NAME'].'</span></span>';
              else if($row['VISIT_SATUS_ID']==84)
                  $STATUS_NAME='<span style="width: 137px;"><span class="label font-weight-bold label-lg label-light-success label-inline">'.$row['STATUS_NAME'].'</span></span>';
  */

            //  $action = '<span style="overflow: visible; position: relative; width: 110px;"><a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a></span>';
            $data[] = array(
                'no' => ++$i,
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'CENTER_NAME_AR' => $row['CENTER_NAME_AR'],
                'CREATE_DATE' => $row['CREATED_ON'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ACTION' => $row['PERSON_SERIAL_ID'],
            );


        }
        // print_r( $data); exit();

        $draw = $_POST['draw'];
        $json_data = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );


        echo json_encode($json_data);

    }

    public function medical_file_vw()
    {

    }

    public function editpatient()
    {
        $this->data['PERSON_ID'] = $_SESSION['PERSON_ID'];
        $this->data['doc_type_list'] = $this->get_lookups(92, 1);//lookups
        $this->data['national_list'] = $this->Constant_model->get_lookups_list(2);//nationality lookups
        //print_r( $this->data['national_list']);exit;
        $this->data['district_list'] = $this->Constant_model->get_geolocation_list(2);//lookups
        $this->data['center_name'] = $_SESSION["my_activ_LOCATIONS"]['LOC_NAME'];
    }

    function get_patient_data()
    {
        $rec = $this->Patient_model->get_patient_by_id($_SESSION['PERSON_ID']);


        $arr = array();
        $temp = array();
        foreach ($rec as $row) {

            $temp['DOCUMENT_TYPE_ID'] = $row['DOCUMENT_TYPE_ID'];
            $temp['DOCUMENT_ID'] = $row['DOCUMENT_ID'];
            $temp['FIRST_NAME'] = $row['FIRST_NAME'];
            $temp['SECOND_NAME'] = $row['SECOND_NAME'];
            $temp['THIRD_NAME'] = $row['THIRD_NAME'];
            $temp['LAST_NAME'] = $row['LAST_NAME'];
            $temp['DOB'] = $row['DOB'];
            $temp['SEX_ID'] = $row['SEX_ID'];
            $temp['DISTRICT_ID'] = $row['DISTRICT_ID'];
            $temp['CITY_ID'] = $row['CITY_ID'];// $this->get_city_by_district($row['DISTRICT_ID'],$row['CITY_ID']);
            $temp['CURRENT_ADDRESS'] = $row['CURRENT_ADDRESS'];
            $temp['MOBILE_NUM'] = $row['MOBILE_NUM'];
            $temp['PHONE_NUM'] = $row['PHONE_NUM'];
            $temp['MOTHER_ID'] = $row['MOTHER_ID'];
            $temp['MOTHER_NAME'] = $row['MOTHER_NAME'];
            $temp['MOTHER_AGE'] = $row['MOTHER_AGE'];
            $temp['MONTHLY_INCOME'] = $row['MONTHLY_INCOME'];
            $temp['CITIZENSHIP'] = $row['CITIZENSHIP'];
            $temp['FAMILY_CARD'] = $row['FAMILY_CARD'];
            $temp['CENTER_ID'] = $row['CENTER_ID'];
            $temp['CENTER_NAME'] = $row['CENTER_NAME_AR'];

            array_push($arr, $temp);
        }
        echo json_encode($arr);
    }

    public function del_file()
    {
        $res = $this->Patient_model->del_medical_file();
        echo $res;
    }

    public function send_data()
    {
        //echo 'send_data';exit;
        extract($_POST);
        unset($_SESSION["PERSON_ID"]);
        $_SESSION['PERSON_ID'] = $PERSON_ID;
        echo $_SESSION['PERSON_ID'];
    }
}

?>
