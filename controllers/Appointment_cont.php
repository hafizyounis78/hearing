<?php

class Appointment_cont extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Appointment_model');

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


    public function calendar_vw()
    {
        //echo 'VISIT_ID'.$_SESSION['VISIT_ID'];exit;
        $this->load->model('Patient_model');

        if (isset($_SESSION['VISIT_ID'])) {
            $this->data['one_patient_data'] = $this->Patient_model->get_patient_data($_SESSION['VISIT_ID']);
            // print_r($this->data['one_patient_data'][0]);exit;
            $this->data['one_patient'] = $this->data['one_patient_data'][0];

        } else {
            redirect('/', 'refresh');
        }
    }

    public function get_events()
    {

        $events = $this->Appointment_model->get_appointments();
        //::whereDate('VISIT_TIME', '>=', $start_date)->whereDate('VISIT_TIME', '<', $end_date)->get();
        // print_r($events);
        $temp = array();
        $temp2 = array();
        $data = array();
        $data = array();
        //  $events[0]['VISIT_TIME_SERIAL'] ;exit;
        for ($i = 0; $i < count($events); $i++) {
            //    $painFile = PainFile::find($event->pain_file_id);
            $color = 'gray';
            if ($events[$i]['VISIT_TYPE'] == 102) {
                $color = 'fc-event-primary';//'#cbffc9';
                $className = 'fc-event-primary';
            } else {
                $color = 'fc-event-info';//'#3598dc';
                $className = 'fc-event-info';
            }

            $temp['id'] = $events[$i]['VISIT_ID'];
            $temp['DOCUMENT_ID'] = $events[$i]['DOCUMENT_ID'];
            $temp['VISIT_TYPE'] = $events[$i]['VISIT_TYPE'];
            $temp['VISIT_TYPE_NAME'] = $events[$i]['VISIT_TYPE_NAME'];
            $temp['title'] = $events[$i]['PATIENT_NAME'];
            $temp['description'] =$events[$i]['NAME_AR'].' - '.$events[$i]['VISIT_TYPE_NAME'];
            $temp['start'] = $events[$i]['START_VISIT_TIME'];
            $temp['end'] = $events[$i]['END_VISIT_TIME'];
            $temp['backgroundColor'] = $color;
            $temp['className'] = $className;
            array_push($data, $temp);
        }
        $temp2['events'] = $data;
        // print_r($temp2);
        echo json_encode($temp2);
    }

    function send_data()
    {
        //echo 'send_data';exit;
        extract($_POST);
        unset($_SESSION["VISIT_ID"]);
        $_SESSION['VISIT_ID'] = $VISIT_ID;
        echo $_SESSION['VISIT_ID'];
    }

    public function save_appointment()
    {
        $res = $this->Appointment_model->insert_new_appointment();
        echo $res;
    }
    public function attend_visit()
    {
        $res = $this->Appointment_model->attend_visit_model();//تسجيل حضور
        $res2 = $this->Appointment_model->update_visit_status_model();//تحت العلاج
        echo $res;
    }
    public function update_visit_status()
    {
        $res = $this->Appointment_model->update_visit_status_model();//تحت العلاج
        echo $res;
    }

}

?>
