<?php

class Statistic_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Statistic_model');
        /*   $this->load->model('Constant_model');
         $this->load->model('Patient_model');*/
    }

    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "التقارير والإحصائيات";
        $this->data['menu'] = "احصائيات عامة";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');


    }

    public function general_statistics()
    {
        $this->data['center_type_list'] = $this->get_lookups_by_permission(52, 1);//ABR RESULT lookups
    }

    public function general_query()
    {
        $this->data['center_type_list'] = $this->get_lookups_by_permission(52, 1);//ABR RESULT lookups
        //print_r( $this->data['center_type_list']);exit;
        // $this->data['center_list'] = $this->get_all_center_list();
        $this->data['referral_center_list'] = $this->get_referral_center(0);
        $this->data['oae_result_list'] = $this->get_lookups(20, 2);//OAE RESULT lookups
        $this->data['abr_result_list'] = $this->get_lookups(24, 2);//ABR RESULT lookups
        $this->data['adt_result_list'] = $this->get_lookups(24, 2);//ABR RESULT lookups
        $this->data['risk_list'] = $this->get_lookups(112, 2);//ABR RESULT lookups
        $this->data['yesNo_List'] = $this->get_lookups(49, 2);//ABR RESULT lookups
    }

    public function get_static_result()
    {
        $temp = array();
        $no_children_screened = $this->Statistic_model->get_stat_no_children_screened();
        // print_r($no_children_screened);exit;
        $no_children_bysex = $this->Statistic_model->get_stat_no_children_bysex();
        //  print_r($no_children_bysex);exit;
        $no_children_pass_1screen = $this->Statistic_model->get_no_children_pass_1screen_pr();
        $no_children_pass_2screen = $this->Statistic_model->get_no_children_pass_2screen_pr();
        $no_children_failed_screen = $this->Statistic_model->get_no_children_failed_screen_pr();
        $no_children_referred = $this->Statistic_model->get_no_children_referred_pr();
        $no_abr_test_done = $this->Statistic_model->get_no_children_abr_test_pr();
        $no_children_with_hearing = $this->Statistic_model->get_no_children_with_hearing_pr();
//******** NEW
        $no_adt_test_done = $this->Statistic_model->get_no_children_adt_pr();
        $no_children_hearing_aid = $this->Statistic_model->get_no_children_hearing_pr();
//********
        $temp['no_children_screened'] = $no_children_screened;
        $temp['no_children_bysex'] = $no_children_bysex;
        $temp['no_children_pass_1screen'] = $no_children_pass_1screen;
        $temp['no_children_pass_2screen'] = $no_children_pass_2screen;
        $temp['no_children_failed_screen'] = $no_children_failed_screen;
        $temp['no_children_referred'] = $no_children_referred;
        $temp['no_abr_test_done'] = $no_abr_test_done;
        $temp['no_children_with_hearing'] = $no_children_with_hearing;
        //******** NEW 12/14/2021 ADT
        $temp['no_abt_test_done'] = $no_adt_test_done;
        $temp['no_children_hearing_aid'] = $no_children_hearing_aid;
        //*********** END ADT



        echo json_encode($temp);
    }


    public function getScreenActivityData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CENTER_NAME_AR",
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
        $totalRecords = $this->Statistic_model->getScreenActivityCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getScreenActivityRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CENTER_NAME_AR' => $row['CENTER_NAME_AR'],

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
    public function getFailChildData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CENTER_NAME_AR",
            10 => "RISK_FACTORS",
            11 => "FIRST_DATE",
            12 => "SECOND_DATE",
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
        $totalRecords = $this->Statistic_model->getChildFailRecordsCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getChildFailRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CENTER_NAME_AR' => $row['CENTER_NAME_AR'],
                'RISK_FACTORS' => $row['RISK_FACTORS'],
                'FIRST_DATE' => $row['FIRST_DATE'],
                'SECOND_DATE' => $row['SECOND_DATE'],

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

    public function getReferralData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CLINIC_FROM",
            10 => "RISK_FACTORS",
            11 => "CLINIC_TRANS",
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
        $totalRecords = $this->Statistic_model->getReferralRecordsCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getReferralRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CLINIC_FROM' => $row['CLINIC_FROM'],
                //    'RISK_FACTORS' => $row['RISK_FACTORS'],
                'REASON_REFERRAL' => $row['REASON_REFERRAL'],
                'CLINIC_TRANS' => $row['CLINIC_TRANS'],

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

    public function getABRTestData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CLINIC_FROM",
            10 => "RISK_FACTORS",
            11 => "CLINIC_TRANS",
            12 => "ِADT_DATE",
            13 => "ABR_DATE",
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
        $totalRecords = $this->Statistic_model->getABRTestRecordsCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getABRTestRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CLINIC_FROM' => $row['CLINIC_FROM'],
                'REASON_REFERRAL' => $row['REASON_REFERRAL'],
                'CLINIC_TRANS' => $row['CLINIC_TRANS'],
                'ِADT_DATE' => $row['ِADT_DATE'],
                'ABR_DATE' => $row['ABR_DATE'],

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

    public function getABRResultData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CLINIC_FROM",
            10 => "RISK_FACTORS",
            11 => "CLINIC_TRANS",
            12 => "ِADT_DATE",
            13 => "ABR_DATE",
            14 => "RESULT_ABR",
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
        $totalRecords = $this->Statistic_model->getABRResultRecordsCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getABRResultRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CLINIC_FROM' => $row['CLINIC_FROM'],
                'RISK_FACTORS' => $row['RISK_FACTORS'],
                'CLINIC_TRANS' => $row['CLINIC_TRANS'],
                'ِADT_DATE' => $row['ِADT_DATE'],
                'ABR_DATE' => $row['ABR_DATE'],
                'RESULT_ABR' => $row['RESULT_ABR'],

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

    public function getQueryData()
    {
        extract($_POST);
        /*  $from_date = $this->input->post('from_date');
          $to_date = $this->input->post('to_date');*/
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CLINIC_FROM",
            10 => "RISK_FACTORS",
            11 => "FIRST_DATE",
            12 => "SECOND_DATE",
            13 => "CLINIC_TRANS",
            14 => "REASON_REFERRAL",
            15 => "ِADT_DATE",
            16 => "ِRESULT_ADT",
            17 => "ABR_DATE",
            18 => "ِRESULT_ABR",
            19 => "ABR_RECOM",
        );

// 1. Order
        $post_order = $_POST['order'];    // Array
        $order = $columns[$post_order[0]['column']];
        //$order = $columns[9];//
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
        $totalRecords = $this->Statistic_model->getGeneralQryCount();
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;
        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getGeneralQryRecords($limit, $start, $order, $dir);
        // $html = '';
        $i = 0;
        $data = array();
       // print_r($this->data['get_patient']); exit();
        foreach ($this->data['get_patient'] as $row) {

            $data[] = array(
                'no' => ++$i,
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CLINIC_FROM' => $row['CLINIC_FROM'],
                'RISK_FACTORS' => $row['RISK_FACTORS'],
                'FIRST_DATE' => $row['FIRST_DATE'],
                'SECOND_DATE' => $row['SECOND_DATE'],
                'CLINIC_TRANS' => $row['CLINIC_TRANS'],
                'REASON_REFERRAL' => $row['REASON_REFERRAL'],
                'ADT_DATE' => $row['ADT_DATE'],
                'RESULT_ADT' => $row['RESULT_ADT'],
                'ABR_DATE' => $row['ABR_DATE'],
                'RESULT_ABR' => $row['RESULT_ABR'],
                'ABR_RECOM' => $row['ABR_RECOM'],
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
    public function get_center_list()
    {
        echo $city_list = $this->get_center_list_parent($this->input->post('center_type'));
    }
    //******** NEW 12/14/2021 ADT
    public function getAdtTestData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CLINIC_FROM",
            10 => "RISK_FACTORS",
            11 => "CLINIC_TRANS",
            12 => "ADT_DATE",
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
        $totalRecords = $this->Statistic_model->getAdtTestCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getAdtTestRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CLINIC_FROM' => $row['CLINIC_FROM'],
                'RISK_FACTORS' => $row['RISK_FACTORS'],
                'CLINIC_TRANS' => $row['CLINIC_TRANS'],
                'ADT_DATE' => $row['ADT_DATE'],
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
    public function getHearingAdtData()
    {
        extract($_POST);
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $columns = array(
            0 => "no",    // NO
            1 => "PERSON_ID",    // NO
            2 => "PATIENT_NAME",
            3 => "DOCUMENT_ID",
            4 => "MOBILE_NUM",
            5 => "ADDRESS",
            6 => "DOB",
            7 => "AGE",
            8 => "SEX_NAME",
            9 => "CLINIC_FROM",
            10 => "RISK_FACTORS",
            11 => "CLINIC_TRANS",
            12 => "HEARING_FITTIY_DATE",

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
        $totalRecords = $this->Statistic_model->getHearingAidCount($from_date, $to_date);
        /* echo $totalRecords;
         exit;*/
        //    echo 'controller';exit;


        // 6. Total Quick Searc Filter
        $totalFiltered = $totalRecords;

        //echo $E_DATE_FROME;exit;
        $this->data['get_patient'] = $this->Statistic_model->getHearingAidRecords($from_date, $to_date, $limit, $start, $order, $dir);

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
                'PERSON_ID' => $row['PERSON_ID'],
                'PATIENT_NAME' => $row['PATIENT_NAME'],
                'DOCUMENT_ID' => $row['DOCUMENT_ID'],
                'MOBILE_NUM' => $row['MOBILE_NUM'],
                'ADDRESS' => $row['DISTRICT_NAME'] . ' - ' . $row['CITY_NAME'],
                'DOB' => $row['DOB'],
                'AGE' => $row['AGE'],
                'SEX_NAME' => $row['SEX_NAME'],
                'CLINIC_FROM' => $row['CLINIC_FROM'],
                'RISK_FACTORS' => $row['RISK_FACTORS'],
                'CLINIC_TRANS' => $row['CLINIC_TRANS'],
                'HEARING_FITTIY_DATE' => $row['HEARING_FITTIY_DATE'],
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


}
?>