<?php

class Doctor_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vital_signs_model');
        $this->load->model('Register_model');
        $this->load->model('Doctor_model');
        $this->load->model('Patient_model');
        $this->load->model('Risk_model');
        $this->load->model('Screening_model');
        $this->load->model('Constant_model');
        $this->load->model('Referral_model');


    }

    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "شاشة الطبيب";
        $this->data['menu'] = "شاشة الطبيب";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');

    }


    public function patient_file()
    {
        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];
            $this->data['one_risk_data'] = $this->Risk_model->get_risk_data($this->data['one_patient']['PERSON_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_risk'] = $this->data['one_risk_data'][0];

            $this->data['screening_table'] = $this->get_screening_datatable($this->data['one_patient']['PERSON_ID']);
            $this->data['delivery_List'] = $this->Constant_model->get_lookups_list(13);//lookups
            $this->data['yesNo_List'] = $this->Constant_model->get_lookups_list(49);//lookups
            $this->data['patient_list'] =$_SESSION['PATIENT_LIST'];//using this to back to patient list
            $this->data['controller'] =$_SESSION['CONTROLLER'];//using this to back to patient list
        } else {
            redirect('/', 'refresh');
        }

    }

    public function doctor_review()
    {
        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];
            $this->data['one_risk_data'] = $this->Risk_model->get_risk_data($this->data['one_patient']['PERSON_ID']);
            $this->data['one_risk_rep'] = $this->risk_factor_rep($this->data['one_patient']['PERSON_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_risk'] = $this->data['one_risk_data'][0];
            $this->data['side_List'] = $this->get_lookups(95, 2);//lookups
            $this->data['test_type_List'] = $this->get_test_lookups(98, 2);//lookups
            $this->data['recom_list'] = $this->get_multi_lookups(39, 2);//lookups

            $this->data['screening_table'] = $this->get_screening_datatable($this->data['one_patient']['PERSON_ID']);
            $this->data['delivery_List'] = $this->Constant_model->get_lookups_list(13);//lookups
            $this->data['yesNo_List'] = $this->Constant_model->get_lookups_list(49);//lookups
            $this->data['exam_list'] = $this->get_referral_test_lookups(98, 2);//lookups
            $this->data['referral_reason_list'] = $this->get_lookups(110, 2);//lookups
            $this->data['center_list'] =$this->get_referral_center($_SESSION["my_activ_LOCATIONS"]['LOC_CD']);
        } else {
            redirect('/', 'refresh');
        }

    }

    public function risk_factor_rep($PERSON_ID)
    {
        $risk_data = $this->Risk_model->get_risk_data($PERSON_ID);

        $html = '';
        foreach ($risk_data as $one_risk) {
            $html = '<tr>           <td>family history of permanent hearing impairment</td>
                                <td>' . $this->get_lookup_desc($one_risk['RISK_FAMILY_HEARING'], 2) . '</td>
                                <td>Admission to N.I.C.U more than 5 days</td>
                                <td>' . $this->get_lookup_desc($one_risk['RISK_NICU'], 2) . '</td>
                                </tr>
                                <tr>
                                    <td>congenital abnormalities of the head or face</td>
                                    <td>' . $this->get_lookup_desc($one_risk['RISK_CONGENITAL'], 2) . '</td>
                               
                                    <td>Neonatal jaundice which required blood exchange</td>
                                    <td>' . $this->get_lookup_desc($one_risk['RISK_BLOOD_EXCHANGE'], 2) . '</td>
                                </tr>
                                <tr>
                                    <td>Gestational age</td>
                                    <td>' . $one_risk['RISK_PREMATURITY'] . '</td>
                                    <td>Type of delivery</td>
                                    <td>' . $this->get_lookup_desc($one_risk['RISK_DELIVERY_TYPE'], 2) . '</td>
                                </tr>
                                <tr>
                                    <td>Consanguinity</td>
                                    <td>' . $this->get_lookup_desc($one_risk['RISK_CONSANGUINTY'], 2) . '</td>
                                    <td>Complications during pregnancy</td>
                                    <td>' . $this->get_lookup_desc($one_risk['RISK_PREGNANCY_DURING'], 2) . '</td>
                                    <th>&nbsp;</th>
               </tr>';
        }
        return $html;
    }

    public function send_data()
    {
        //echo 'send_data';exit;
        extract($_POST);
        unset($_SESSION["VISIT_ID"]);
        unset($_SESSION["PATIENT_LIST"]);
        unset($_SESSION["CONTROLLER"]);
        $_SESSION['VISIT_ID'] = $VISIT_ID;
        $_SESSION['PATIENT_LIST'] = $PATIENT_LIST;
        $_SESSION['CONTROLLER'] = $CONTROLLER;
        echo $_SESSION['VISIT_ID'];
    }

    public function get_screening_datatable($PERSON_ID)
    {
        $data = $this->Doctor_model->get_screening_datatable($PERSON_ID);
        $html = '';
        $i = 0;
        foreach ($data as $row) {

            $html .= '<tr><td>' . ++$i . '</td>';
            $html .= '<td>' . $row['R_TEST_DATE'] . '</td>';
            $html .= '<td>' . $row['SITE_NAME'] . '</td>';
            $html .= '<td>' . $row['TEST_NAME'] . '</td>';
            $html .= '<td>' . $row['RESULT_NAME'] . '</td>';
            $html .= '<td>' . $row['TEST_RECOM'] . '</td>';
            $html .= '<td>' . $row['R_TEST_NOTE'] . '</td>';
            //  $html .= '<td>' . $row['EMP_NAME'] . '</td>';
            /*   $html .= '<td><a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"
   onclick="delete_screening(' . $row['RESULT_ID'] . ',' . $row['R_PERSON_ID'] . ')"><i class="la la-trash"></i></a>
   <a title="Edit" class="btn btn-sm btn-clean btn-icon btn-icon-md"
   onclick="edit_screening(' . $row['RESULT_ID'] . ')"><i class="la la-edit"></i></a></td>';*/
            $html .= '</tr>';

        }
        return $html;
    }

    public function get_screening_datatable_rep($PERSON_ID)
    {
        $data = $this->Doctor_model->get_screening_rep_datatable($PERSON_ID,1);
        $html = '';
        $i = 0;
        foreach ($data as $row) {

            $html .= '<tr><td>' . ++$i . '</td>';
            $html .= '<td>' . $row['R_TEST_DATE'] . '</td>';
            $html .= '<td>' . $row['SITE_NAME'] . '</td>';
            $html .= '<td>' . $row['TEST_NAME'] . '</td>';
            $html .= '<td>' . $row['RESULT_NAME'] . '</td>';
            $html .= '<td>' . $row['R_TEST_NOTE'] . '</td>';
            $html .= '</tr>';

        }
        return $html;
    }
    public function get_hearing_test_datatable_rep($PERSON_ID)
    {
        $data = $this->Doctor_model->get_screening_rep_datatable($PERSON_ID,2);
        $html = '';
        $i = 0;
        foreach ($data as $row) {

            $html .= '<tr><td>' . ++$i . '</td>';
            $html .= '<td>' . $row['R_TEST_DATE'] . '</td>';
            $html .= '<td>' . $row['SITE_NAME'] . '</td>';
            $html .= '<td>' . $row['TEST_NAME'] . '</td>';
            $html .= '<td>' . $row['RESULT_NAME'] . '</td>';
            $html .= '<td>' . $row['TEST_RECOM'] . '</td>';
            $html .= '<td>' . $row['R_TEST_NOTE'] . '</td>';
            $html .= '</tr>';

        }
        return $html;
    }
    public function get_referral_datatable_rep($PERSON_ID)
    {
        $data = $this->Doctor_model->get_referral_datatable($PERSON_ID);
        $html = '';
        $i = 0;
        foreach ($data as $row) {

            $html .= '<tr><td>' . ++$i . '</td>';
            $html .= '<td>' . $row['RM_DATE'] . '</td>';
            $html .= '<td>' . $row['CLINIC_FROM'] . '</td>';
            $html .= '<td>' . $row['TRANSFORMATION'] . '</td>';
            $html .= '<td>' . $this->get_lookup_desc($row['RM_REQUIRED_EXAMINATION'], 2) . '</td>';
            $html .= '<td>' . $this->get_lookup_desc($row['RE_REASON_REFERRAL'], 2) . '</td>';
            $html .= '</tr>';

        }
        return $html;
    }

    public function get_hearing_datatable_rep($PERSON_ID)
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
            $html .= '</tr>';
        }
        return $html;
    }

    public function view_report()
    {
        $data = array();
        $temp = array();
        extract($_POST);

        $data['one_risk_rep'] = $this->risk_factor_rep($PERSON_ID);
        $data['screening_rep'] = $this->get_screening_datatable_rep($PERSON_ID);
        $data['referral_rep'] = $this->get_referral_datatable_rep($PERSON_ID);
        $data['hearing_test_rep'] = $this->get_hearing_test_datatable_rep($PERSON_ID);
        $data['hearing_rep'] = $this->get_hearing_datatable_rep($PERSON_ID);

        array_push($temp, $data);
        echo json_encode($temp);
    }
}

?>
