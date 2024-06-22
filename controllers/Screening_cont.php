<?php

class Screening_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Screening_model');

    }

    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "Screening";
        $this->data['menu'] = "Patient List";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');


    }


    public function screening()
    {
        //  echo 'VISIT_ID'.$_SESSION['VISIT_ID'];exit;
        $this->load->model('Patient_model');

        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];
            $this->data['side_List'] = $this->get_lookups(95, 2);//lookups
            $this->data['test_type_List'] = $this->get_test_lookups(98, 2);//lookups
            $this->data['recom_list'] = $this->get_multi_lookups(39, 2);//lookups

        } else {
            redirect('/', 'refresh');
        }
    }

    public function referral_screening()
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


    function get_multi_lookups($id)
    {
        $this->load->model('Constant_model');
        $list_value = $this->Constant_model->get_lookups_list($id);

        $html = '';
        foreach ($list_value as $row) {
            $html .= '<option value="' . $row['ID'] . '">' . $row['LOOKUP_DETAILS_EN'] . '</option>';
        }
        return $html;
    }

    public function get_test_result()
    {
        $R_TEST_TYPE = $this->input->post('R_TEST_TYPE');
        if ($R_TEST_TYPE == 100)//APR
            $recom_list = $this->get_lookups(24, 2);//lookups
        else if ($R_TEST_TYPE == 20)
            $recom_list = $this->get_lookups(20, 2);//lookups
        else if ($R_TEST_TYPE == 99)
            $recom_list = $this->get_lookups(99, 2);//lookups
        else if ($R_TEST_TYPE == 45)
            $recom_list = $this->get_lookups(45, 2);//lookups
        else
            $recom_list = '';
        echo $recom_list;
    }

    function send_data()
    {
        //echo 'send_data';exit;
        extract($_POST);
        unset($_SESSION["VISIT_ID"]);
        $_SESSION['VISIT_ID'] = $VISIT_ID;
        echo $_SESSION['VISIT_ID'];
    }

    public function save_screening()
    {
        $res = $this->Screening_model->insert_screening();
        echo $res;
    }

    public function get_screening_datatable()
    {
        extract($_POST);
        $center_id = $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        $data = $this->Screening_model->get_screening_datatable();
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
            $html .= '<td>' . $row['NAME_AR'] . '</td>';
            //    $html .= '<td>' . $row['EMP_NAME'] . '</td>';
            if ($row['V_CENTER_ID'] == $center_id)
                $html .= '<td><a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md" 
onclick="delete_screening(' . $row['RESULT_ID'] . ',' . $row['R_PERSON_ID'] . ')"><i class="la la-trash"></i></a>
<a title="Edit" class="btn btn-sm btn-clean btn-icon btn-icon-md" 
onclick="edit_screening(' . $row['RESULT_ID'] . ')"><i class="la la-edit"></i></a></td>';
            $html .= '</tr>';

        }
        echo $html;
    }

    public function del_screening()
    {
        $res = $this->Screening_model->delete_screening_model();
        echo $res;
    }

    public function edit_screening()
    {
        $data = $this->Screening_model->get_screening_by_id();
        $arr = array();
        $temp = array();
        foreach ($data as $row) {

            $temp['R_TEST_TYPE'] = $row['R_TEST_TYPE'];
            $temp['R_TEST_SITE'] = $row['R_TEST_SITE'];
            $temp['R_TEST_RESULT'] = $row['R_TEST_RESULT'];
            $temp['R_TEST_NOTE'] = $row['R_TEST_NOTE'];
            $temp['R_CREATED_ON'] = $row['R_CREATED_ON'];
            $temp['R_TEST_DATE'] = $row['R_TEST_DATE'];

        }
        array_push($arr, $temp);
        echo json_encode($arr);
    }

    function edit_recom_list()
    {
        extract($_POST);


        $this->load->model('Patient_model');
        $this->load->model('Constant_model');
        $recom_list = $this->Constant_model->get_lookups_list(39);
        $data = $this->Screening_model->get_scree_recom_by_id();

        $html = '';
        if ($data != '') {

            $html = '';
            $selected = '';
            foreach ($recom_list as $row) {
                for ($i = 0; $i < count($data); $i++) {
                    $selected = '';
                    if ($data[$i]['RE_TEST_RECOM'] == $row['ID']) {
                        $selected = 'selected';
                        break;
                    }
                }
                $html .= '<option value="' . $row['ID'] . '" ' . $selected . '>' . $row['LOOKUP_DETAILS_EN'] . '</option>';
            }
        } else
            echo $html;
        echo $html;
    }
}

?>
