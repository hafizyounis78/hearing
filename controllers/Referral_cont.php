<?php

class Referral_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Referral_model');
        $this->load->model('Constant_model');

    }

    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "ٌReferral";
        $this->data['menu'] = "Patient List";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');


    }


    public function referral_request()
    {
        //  echo 'VISIT_ID'.$_SESSION['VISIT_ID'];exit;
        $this->load->model('Patient_model');

        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];
            $this->data['exam_list'] = $this->get_referral_test_lookups(98, 2);//lookups
            $this->data['referral_reason_list'] = $this->get_lookups(110, 2);//lookups
            $this->data['center_list'] = $this->get_referral_center($_SESSION["my_activ_LOCATIONS"]['LOC_CD']);

        } else {
            redirect('/', 'refresh');
        }
    }

    public function referral_query()
    {
//شاشه استعلام التحويلات
    }

    public function referral_to()
    {
//شاشه استعلام التحويلات
    }

    public function getReferralPatient()
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
            3 => "DOB",
            4 => "CENTER_NAME_AR",
            5 => "VISIT_TYPE",
            6 => "STATUS_NAME",
            7 => "RM_DATE",
            8 => "Actions",
        );
      /*  $columns = array(
            0 => 'no',
            1 => 'PERSON_ID',
            2 => 'DOCUMENT_ID',
            3 => 'PATIENT_NAME',
            4 => 'DOB',
            5 => 'CENTER_NAME_AR',
            6 =>  'RM_REQUIRED_EXAMINATION' ,
            7 =>  'RE_REASON_REFERRAL',
            8 =>  'RM_DATE' ,
            9 =>  'MOBILE_NUM' ,
            10 =>  'RM_APP_IS_DONE' ,
            11 =>  'VISIT_ATTEND_CD' ,
            12 =>  'ACTION' ,
        );*/

// 1. Order
        $post_order = $_POST['order'];    // Array
        $order = $columns[$post_order[0]['column']];
        //$order = $columns[1];
        $dir = $post_order[0]['dir'];

        $draw = $_POST['draw'];

        // 2. Start & Limit
        $limit = $_POST['length'];
        $start = $_POST['start'];

        // 3. Quick Search
        /* $search_post = $_POST['search'];	// Array
         $search = '';
         $search = $search_post['value'];*/
        /*
        if(($E_DATE_FROM !=''||$E_DATE_FROM!=null) &&($E_DATE_TO==''||$E_DATE_TO==null )) {

            $E_DATE_TO = $E_DATE_FROM;
        }
      */
        // 4. Totla Files Count
        $totalRecords = $this->Referral_model->getReferralPatientRecordsCount($patient_id, $patient_name, $from_date, $to_date, $p_show);

        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Referral_model->getReferralPatientRecords($patient_id, $patient_name, $from_date, $to_date, $p_show, $limit, $start, $order, $dir);

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
                'DOB' => date("d/m/Y", strtotime($row['DOB'])),
                'CENTER_NAME_AR' => $row['NAME_AR'],
                'RM_REQUIRED_EXAMINATION' => $this->get_lookup_desc($row['RM_REQUIRED_EXAMINATION'], 2),
                'RE_REASON_REFERRAL' => $this->get_lookup_desc($row['RE_REASON_REFERRAL'], 2),
                'RM_DATE' => $row['RM_DATE_CHAR'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'RM_APP_IS_DONE' => $row['RM_APP_IS_DONE'],
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

    public function getReferralFromPatient()
    {

        extract($_POST);

        $patient_id = $this->input->post('patient_id');
        $patient_name = $this->input->post('patient_name');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $p_show = $this->input->post('p_show');

      /*  $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "CENTER_NAME_AR",
            4 => "VISIT_TYPE",
            5 => "STATUS_NAME",
            6 => "VISIT_DATE",
            7 => "Actions",
        );*/
        $columns = array(
            0 => 'no',
            1 => 'PERSON_ID',
            2 => 'DOCUMENT_ID',
            3 => 'PATIENT_NAME',
            4 => 'CENTER_NAME_AR',
            5 =>  'RM_REQUIRED_EXAMINATION' ,
            6 =>  'RE_REASON_REFERRAL',
            7 =>  'RM_DATE' ,
            8 =>  'MOBILE_NUM' ,
            9 =>  'RM_APP_IS_DONE' ,
            10 =>  'VISIT_ATTEND_CD' ,
            11 =>  'ACTION' ,
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
         $search = '';
         $search = $search_post['value'];*/
        /*
        if(($E_DATE_FROM !=''||$E_DATE_FROM!=null) &&($E_DATE_TO==''||$E_DATE_TO==null )) {

            $E_DATE_TO = $E_DATE_FROM;
        }
      */
        // 4. Totla Files Count
        $totalRecords = $this->Referral_model->getReferralFromPatientRecordsCount($patient_id, $patient_name, $from_date, $to_date, $p_show);

        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Referral_model->getReferralFromPatientRecords($patient_id, $patient_name, $from_date, $to_date, $p_show, $limit, $start, $order, $dir);

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
                'CENTER_NAME_AR' => $row['NAME_AR'],
                'RM_REQUIRED_EXAMINATION' => $this->get_lookup_desc($row['RM_REQUIRED_EXAMINATION'], 2),
                'RE_REASON_REFERRAL' => $this->get_lookup_desc($row['RE_REASON_REFERRAL'], 2),
                'RM_DATE' => $row['RM_DATE'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'RM_APP_IS_DONE' => $row['RM_APP_IS_DONE'],
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

    function send_data()
    {
        //echo 'send_data';exit;
        extract($_POST);
        unset($_SESSION["VISIT_ID"]);
        $_SESSION['VISIT_ID'] = $VISIT_ID;
        echo $_SESSION['VISIT_ID'];
    }

    public function save_referral()
    {
        $res = $this->Referral_model->insert_referral();
        echo $res;
    }


    public function referral_hearing_aid()
    {
        //  echo 'VISIT_ID'.$_SESSION['VISIT_ID'];exit;
        $this->load->model('Patient_model');

        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];
            $this->data['side_List'] = $this->get_lookups(95, 2);//lookups
            $this->data['test_type_List'] = $this->get_referral_test_lookups(98, 2);//lookups
            $this->data['recom_list'] = $this->get_multi_lookups(39, 2);//lookups

        } else {
            redirect('/', 'refresh');
        }
    }

    public function get_hearing_datatable()
    {
        extract($_POST);
        $center_id = $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        $data = $this->Referral_model->get_hearing_aid_datatable();
        $html = '';
        $i = 0;
        foreach ($data as $row) {

            $html .= '<tr><td>' . ++$i . '</td>';
            $html .= '<td>' . $row['HEARING_FITTIY_DATE'] . '</td>';
            $html .= '<td>' . $this->get_lookup_desc($row['HEARING_SIDE'], 2) . '</td>';
            $html .= '<td>' . $row['HEARING_MODEL'] . '</td>';
            $html .= '<td>' . $row['HEARING_SN'] . '</td>';
            $html .= '<td>' . $row['NAME_AR'] . '</td>';
            //    $html .= '<td>' . $row['EMP_NAME'] . '</td>';
            if ($row['CENTER_ID'] == $center_id)
                $html .= '<td><a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md" 
onclick="delete_hearing_aid(' . $row['HEARING_ID'] . ',' . $row['HEARING_PERSON_ID'] . ')"><i class="la la-trash"></i></a>
<a title="Edit" class="btn btn-sm btn-clean btn-icon btn-icon-md" 
onclick="edit_hearing_aid(' . $row['HEARING_ID'] . ')"><i class="la la-edit"></i></a></td>';
            $html .= '</tr>';

        }
        echo $html;
    }

    public function insert_hearing_aid()
    {
        $res = $this->Referral_model->insert_hearing_aid();
        echo $res;
    }

    public function edit_hearing_aid()
    {
        $data = $this->Referral_model->get_hearing_aid_byid();
        $arr = array();
        $temp = array();
        foreach ($data as $row) {

            $temp['HEARING_FITTIY_DATE'] = $row['HEARING_FITTIY_DATE'];
            $temp['HEARING_MODEL'] = $row['HEARING_MODEL'];
            $temp['HEARING_SIDE'] = $row['HEARING_SIDE'];
            $temp['HEARING_SN'] = $row['HEARING_SN'];

        }
        array_push($arr, $temp);
        echo json_encode($arr);
    }

    public function del_hearing_aid()
    {
        $res = $this->Referral_model->delete_hearing_aid_model();
        echo $res;
    }

    public function get_test_result_recom()
    {
        $R_TEST_TYPE = $this->input->post('R_TEST_TYPE');
        if ($R_TEST_TYPE == 100) {//APR
            $result_list = $this->get_lookups(24, 2);//lookups
            $recom_list = $this->get_lookups(39, 2);//lookups
        } else if ($R_TEST_TYPE == 99) {
            $result_list = $this->get_lookups(99, 2);//lookups
            $recom_list = $this->get_lookups(113, 2);//lookups
        } else
            $result_list = '';
        $temp = array();
        $temp['TEST_RESULT_LIST'] = $result_list;
        $temp['TEST_RECOM_LIST'] = $recom_list;
        // array_push($arr, $temp);
        echo json_encode($temp);
    }
}

?>
