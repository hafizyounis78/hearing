<?php

class Risk_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Risk_model');
        $this->load->model('Constant_model');
        $this->load->model('Patient_model');
    }

    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "قائمة المرضى ";
        $this->data['menu'] = "الاستعلام العام";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');


    }






    public function open_risk()
    {
        if (!file_exists('application/views/pages/open_risk.php')) {
            show_404();
        }



        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];
            $this->data['one_risk_data'] = $this->Risk_model->get_risk_data($this->data['one_patient']['PERSON_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_risk'] = $this->data['one_risk_data'][0];

            $this->data['yesNo_List'] = $this->Constant_model->get_lookups_list(49);//lookups
            $this->data['delivery_List'] = $this->Constant_model->get_lookups_list(13);//lookups
            $this->data['title'] = "متابعة عوامل الخطر";
            $this->data['menu'] = "عوامل الخطر";
            $this->load->view('templates/head', $this->data);
            $this->load->view('templates/page_header_menu');
            $this->load->view('pages/open_risk', $this->data);
            $this->load->view('templates/footer');
        } else {
            redirect('/', 'refresh');
        }
    }

    public function send_data()
    {
        //echo 'send_data';exit;
        extract($_POST);
        unset($_SESSION["VISIT_ID"]);
        $_SESSION['VISIT_ID'] = $VISIT_ID;
        echo $_SESSION['VISIT_ID'];
    }

    public function save_risk_cont()
    {
        $res = $this->Risk_model->insert_risk();
        echo $res;
    }


}

?>
