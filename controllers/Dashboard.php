<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Patient_model');
        $this->load->model('Dashboard_model');


    }

// 	public $data;
    function view($page = 'home')
    {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->$page();

        $this->data['title'] = "نظام فحص السمعيات";
        $this->data['menu'] = " نظام فحص السمعيات";
        $this->load->view('templates/head', $this->data);
        $this->load->view('templates/page_header_menu');
        $this->load->view('pages/' . $page, $this->data);
        $this->load->view('templates/footer');

    }

    /*public function index()
    {
        $this->load->view('welcome_message');
    }*/

    public function is_logged_in_ajax()
    {
        if ($this->_is_logged_in())
            echo 1;
        else
            echo 0;
    }

    public function dashboard_vw()
    {
       // $result = $this->User_model->GET_RTC_USER_PERMISSION();
        $_SESSION['RTC_CENTER_ID'] = $result[0]['RTC_CENTER_ID'];
        $_SESSION['RTC_CENTER_NAME_AR'] = $result[0]['RTC_CENTER_NAME_AR'];
        $_SESSION['RTC_USER_ID'] = $result[0]['RTC_USER_ID'];
        $_SESSION['RTC_EMP_NAME'] = $result[0]['EMP_NAME'];
        $_SESSION['TITLE_ID'] = $result[0]['TITLE_ID'];
        /*    echo $result['PR_RESULT'];
        exit; */

    }

    public function visit_count_vw()
    {
        $this->data['VISIT_COUNT_RAFAH'] = $this->Patient_model->GET_PATIENT_COUNT(25);
        $this->data['VISIT_COUNT_KHANYOUNIS'] = $this->Patient_model->GET_PATIENT_COUNT(21);
        $this->data['VISIT_COUNT_AQSA'] = $this->Patient_model->GET_PATIENT_COUNT(22);
        $this->data['VISIT_COUNT_GAZA'] = $this->Patient_model->GET_PATIENT_COUNT(24);
        $this->data['VISIT_COUNT_NORTH'] = $this->Patient_model->GET_PATIENT_COUNT(23);

        /*    echo $result['PR_RESULT'];
        exit; */

    }

    public function dashboard_all_vw()
    {
        $this->data['GET_C_RTC_CENTER_PR'] = $this->User_model->GET_C_RTC_CENTER_PR();
        /*    echo $result['PR_RESULT'];
        exit; */

    }

    public function dashboard_count_vw()
    {
        $this->data['GET_C_RTC_CENTER_PR'] = $this->User_model->GET_C_RTC_CENTER_PR();
        /*    echo $result['PR_RESULT'];
        exit; */

    }


    public function dashboard_count_center_vw()
    {
        $this->data['GET_C_RTC_CENTER_PR'] = $this->User_model->GET_C_RTC_CENTER_PR();
        /*    echo $result['PR_RESULT'];
        exit; */
    }


    public function GET_COUNT_PATIENT()
    {
        extract($_POST);
        $result = $this->Dashboard_model->GET_COUNT_PATIENT($P_FROM_DATE, $P_TO_DATE, $P_CENTER);
        /*         print_r($result['DOCTOR_ASSESSMENT']);
                echo 'saleh';
                exit();  */
        echo json_encode($result);
    }

    public function GET_COUNT_PATIENT_DETAILS()
    {
        extract($_POST);
        $result = $this->Dashboard_model->GET_COUNT_PATIENT_DETAILS($P_CENTER,$P_TO_DATE,$P_FROM_DATE);
        $i = 1;
        foreach ($result as $row) {
            $originalDate = $row['VISIT_DATE'] ;
            $new_date = date("d/m/Y", strtotime($originalDate));
            $html = $html . '<tr><td>' . $i . '</td>
         				     <td>' . $row['RTC_CENTER_NAME_AR'] . '</td>
                             <td>' . $new_date . '</td>
							 <td>' . $row['SUSPICTED'] . '</td>
                              <td>' . $row['NOT_SUSPICTED'] . '</td>
                             <td>' . $row['NULL_VAL'] . '</td>
                             <td>' .  $row['TOTAL_VISITS'] . '</td>';
            $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

//         echo json_encode($result);
    }



    public function GET_COUNT_PATIENT_CENTER()
    {
        extract($_POST);
        $P_CENTER = $_SESSION["RTC_CENTER_ID"];
        $result = $this->Dashboard_model->GET_COUNT_PATIENT($P_FROM_DATE, $P_TO_DATE, $P_CENTER);
        echo json_encode($result);
    }

    public function GET_REQUEST_TYPE()
    {
        extract($_POST);
        $result = $this->Dashboard_model->GET_REQUEST_TYPE($P_FROM_DATE, $P_TO_DATE);
        echo json_encode($result);
    }

    public function GET_REQUEST_TYPE_TABLE()
    {
        extract($_POST);
        $res = $this->Dashboard_model->GET_REQUEST_TYPE($P_FROM_DATE, $P_TO_DATE);
        $data = array();
//print_r($result);exit;
        foreach ($res as $row) {
            unset($array); // Release the contained value of the variable from the last loop
            $array = array();
            $array['REQUEST_TYPE'] = $row["REQUEST_TYPE"];
            $array['POSITIVE'] = $row["POSITIVE"];
            $array['NEGATIVE'] = $row["NEGATIVE"];
            $array['TOTAL'] = $row["TOTAL"];
            array_push($data, $array);

        }
        $draw = array(
            "page" => 1,
            "pages" => 1,
            "perpage" => -1,
            "total" => 6,
            "sort" => "asc",
            "field" => "REQUEST_TYPE"
        );

        $result = array(
            "meta" => $draw,
            "data" => $data
        );

        echo json_encode($result);
    }

    public function GET_REQUEST_TYPE_BY_GOV()
    {
        extract($_POST);
        $result2 = $this->Dashboard_model->GET_REQUEST_TYPE_BY_GOV($P_FROM_DATE, $P_TO_DATE);
        $data = array();

        foreach ($result2 as $row) {
            unset($array); // Release the contained value of the variable from the last loop
            $array = array();
            $array['CURRENT_GOVERNORATE_ID'] = $row["CURRENT_GOVERNORATE_ID"];
            $array['CURRENT_GOVERNORATE_NAME'] = $row["CURRENT_GOVERNORATE_NAME"];
            $array['SCREENING'] = $row["SCREENING"];
            $array['SUSPECTED'] = $row["SUSPECTED"];
            $array['SCREENING'] = $row["SCREENING"];
            $array['TOTAL'] = $row["TOTAL"];
            array_push($data, $array);

        }

//       foreach($result2 as $r) {
//            $data[] = array(
//            $r['CONTACTS']->CONTACTS,
//            $r['CURRENT_GOVERNORATE_ID']->CURRENT_GOVERNORATE_NAME,
//            $r->CURRENT_GOVERNORATE_NAME,
//            $r['NOT_SPECIFIED']->NOT_SPECIFIED,
//            $r['PATIENT']->PATIENT,
//            $r->SCREENING,
//            $r->SUSPECTED,
//            $r->TOTAL
//            );
//       }


        $draw = array(
            "page" => 1,
            "pages" => 1,
            "perpage" => -1,
            "total" => 6,
            "sort" => "asc",
            "field" => "CURRENT_GOVERNORATE_ID"
        );

        $result = array(
            "meta" => $draw,
            "data" => $data
        );

        echo json_encode($result2);
    }

    public function GET_REQUEST_TYPE_BY_GOV_DETAIL()
    {
        extract($_POST);
        // print_r($_POST);exit;
        $res = $this->Dashboard_model->GET_REQUEST_TYPE_BY_GOV_DETAIL_PR($CURRENT_GOVERNORATE_ID, $P_FROM_DATE, $P_TO_DATE);
        /*  $data = array();
         //  print_r($res);exit;
         foreach ($res as $row) {
             unset($array); // Release the contained value of the variable from the last loop
             $array = array();
             $array['TEST_RESULT'] = $row["TEST_RESULT"];
             $array['CONTACTS'] = $row["CONTACTS"];
             $array['RANDOM_SCREENING'] = $row["RANDOM_SCREENING"];
             $array['DIRECTED_SCREENING'] = $row["DIRECTED_SCREENING"];
             $array['SUSPECTED'] = $row["SUSPECTED"];
             //    $array['PATIENT'] = $row["PATIENT"];
             //   $array['NOT_SPECIFIED'] = $row["NOT_SPECIFIED"];
             $array['TOTAL'] = $row["TOTAL"];
             array_push($data, $array);

         } */

//       foreach($result2 as $r) {
//            $data[] = array(
//            $r['CONTACTS']->CONTACTS,
//            $r['CURRENT_GOVERNORATE_ID']->CURRENT_GOVERNORATE_NAME,
//            $r->CURRENT_GOVERNORATE_NAME,
//            $r['NOT_SPECIFIED']->NOT_SPECIFIED,
//            $r['PATIENT']->PATIENT,
//            $r->SCREENING,
//            $r->SUSPECTED,
//            $r->TOTAL
//            );
//       }


        /*         $draw = array(
                    "page" => 1,
                    "pages" => 1,
                    "perpage" => -1,
                    "total" => 6,
                    "sort" => "asc",
                    "field" => "CURRENT_GOVERNORATE_ID"
                );

                $result = array(
                    "meta" => $draw,
                    "data" => $data
                ); */

        echo json_encode($res);
    }

    public function GET_REQUEST_TYPE_STAFF_BY_CITY()
    {
        extract($_POST);
        // print_r($_POST);exit;
        $res = $this->Dashboard_model->GET_REQUEST_TYPE_STAFF_BY_CITY($CURRENT_GOVERNORATE_ID, $P_FROM_DATE, $P_TO_DATE);
        /*    $data = array();
           //  print_r($res);exit;
           foreach ($res as $row) {
               unset($array); // Release the contained value of the variable from the last loop
               $array = array();
               $array['TEST_RESULT'] = $row["TEST_RESULT"];
               $array['CONTACTS'] = $row["CONTACTS"];
               $array['SCREENING'] = $row["SCREENING"];
               $array['SUSPECTED'] = $row["SUSPECTED"];
               //    $array['PATIENT'] = $row["PATIENT"];
               //   $array['NOT_SPECIFIED'] = $row["NOT_SPECIFIED"];
               $array['TOTAL'] = $row["TOTAL"];
               array_push($data, $array);

           }

           $draw = array(
               "page" => 1,
               "pages" => 1,
               "perpage" => -1,
               "total" => 6,
               "sort" => "asc",
               "field" => "CURRENT_GOVERNORATE_ID"
           );

           $result = array(
               "meta" => $draw,
               "data" => $data
           ); */

        echo json_encode($res);
    }

    public function GET_REQUEST_TYPE_STAFF_BY_NEIGHBORHOOD()
    {
        extract($_POST);
        // print_r($_POST);exit;
        $res = $this->Dashboard_model->GET_REQUEST_TYPE_STAFF_BY_NEIGHBORHOOD($CURRENT_NEIGHBORHOOD_ID, $P_FROM_DATE, $P_TO_DATE);
        echo json_encode($res);
    }



    public function GET_REQUEST_TYPE_STAFF_BY_GOV()
    {
        extract($_POST);
        $result2 = $this->Dashboard_model->GET_REQUEST_TYPE_STAFF_BY_GOV_PR($P_FROM_DATE, $P_TO_DATE);
        /*      $data = array();
           //  print_r($result2);exit;
             foreach ($result2 as $row) {
                 unset($array); // Release the contained value of the variable from the last loop
                 $array = array();
                 $array['CURRENT_GOVERNORATE_ID'] = $row["CURRENT_GOVERNORATE_ID"];
                 $array['GOVERNORATE_NAME'] = $row["GOVERNORATE_NAME"];

                 $array['CONTACTS_NOT_STAFF'] = $row["CONTACTS_NOT_STAFF"];
                 $array['CONTACTS_STAFF'] = $row["CONTACTS_STAFF"];
                 $array['CONTACTS_TOTAL'] = $row["CONTACTS_TOTAL"];

                 $array['SUSPICTED_NOT_STAFF'] = $row["SUSPICTED_NOT_STAFF"];
                 $array['SUSPICTED_STAFF'] = $row["SUSPICTED_STAFF"];
                 $array['SUSPICTED_TOTAL'] = $row["SUSPICTED_TOTAL"];

                 $array['SCREENING_NOT_STAFF'] = $row["SCREENING_NOT_STAFF"];
                 $array['SCREENING_STAFF'] = $row["SCREENING_STAFF"];
                 $array['SCREENING_TOTAL'] = $row["SCREENING_TOTAL"];

                 $array['GRAND_TOTAL'] = $row["GRAND_TOTAL"];

                 array_push($data, $array);

             } */

//       foreach($result2 as $r) {
//            $data[] = array(
//            $r['CONTACTS']->CONTACTS,
//            $r['CURRENT_GOVERNORATE_ID']->CURRENT_GOVERNORATE_NAME,
//            $r->CURRENT_GOVERNORATE_NAME,
//            $r['NOT_SPECIFIED']->NOT_SPECIFIED,
//            $r['PATIENT']->PATIENT,
//            $r->SCREENING,
//            $r->SUSPECTED,
//            $r->TOTAL
//            );
//       }

        /*
                $draw = array(
                    "page" => 1,
                    "pages" => 1,
                    "perpage" => -1,
                    "total" => 6,
                    "sort" => "asc",
                    "field" => "CURRENT_GOVERNORATE_ID"
                );

                $result = array(
                    "meta" => $draw,
                    "data" => $data
                ); */

        echo json_encode($result2);
    }


    public function GET_REQUEST_TYPE_BY_GOV_neighborhoods()
    {
        extract($_POST);
        $result2 = $this->Dashboard_model->GET_REQUEST_TYPE_BY_GOV($P_FROM_DATE, $P_TO_DATE);
        /*     $data = array();

            foreach ($result2 as $row) {
                unset($array); // Release the contained value of the variable from the last loop
                $array = array();
                $array['CURRENT_GOVERNORATE_ID'] = $row["CURRENT_GOVERNORATE_ID"];
                $array['CURRENT_GOVERNORATE_NAME'] = $row["CURRENT_GOVERNORATE_NAME"];
                $array['SCREENING'] = $row["SCREENING"];
                $array['SUSPECTED'] = $row["SUSPECTED"];
                $array['SCREENING'] = $row["SCREENING"];
                $array['TOTAL'] = $row["TOTAL"];
                array_push($data, $array);

            }
     */
//       foreach($result2 as $r) {
//            $data[] = array(
//            $r['CONTACTS']->CONTACTS,
//            $r['CURRENT_GOVERNORATE_ID']->CURRENT_GOVERNORATE_NAME,
//            $r->CURRENT_GOVERNORATE_NAME,
//            $r['NOT_SPECIFIED']->NOT_SPECIFIED,
//            $r['PATIENT']->PATIENT,
//            $r->SCREENING,
//            $r->SUSPECTED,
//            $r->TOTAL
//            );
//       }


        /*   $draw = array(
              "page" => 1,
              "pages" => 1,
              "perpage" => -1,
              "total" => 6,
              "sort" => "asc",
              "field" => "CURRENT_GOVERNORATE_ID"
          );

          $result = array(
              "meta" => $draw,
              "data" => $data
          ); */

        echo json_encode($result2);
    }

    public function GET_REQUEST_TYPE_BY_GOV_DETAIL_neighborhoods()
    {
        extract($_POST);
        // print_r($_POST);exit;
        $res = $this->Dashboard_model->GET_REQUEST_TYPE_BY_GOV_DETAIL_PR($CURRENT_GOVERNORATE_ID, $P_FROM_DATE, $P_TO_DATE);
        /*  $data = array();
         //  print_r($res);exit;
         foreach ($res as $row) {
             unset($array); // Release the contained value of the variable from the last loop
             $array = array();
             $array['TEST_RESULT'] = $row["TEST_RESULT"];
             $array['CONTACTS'] = $row["CONTACTS"];
             $array['SCREENING'] = $row["SCREENING"];
             $array['SUSPECTED'] = $row["SUSPECTED"];
             //    $array['PATIENT'] = $row["PATIENT"];
             //   $array['NOT_SPECIFIED'] = $row["NOT_SPECIFIED"];
             $array['TOTAL'] = $row["TOTAL"];
             array_push($data, $array);

         } */

//       foreach($result2 as $r) {
//            $data[] = array(
//            $r['CONTACTS']->CONTACTS,
//            $r['CURRENT_GOVERNORATE_ID']->CURRENT_GOVERNORATE_NAME,
//            $r->CURRENT_GOVERNORATE_NAME,
//            $r['NOT_SPECIFIED']->NOT_SPECIFIED,
//            $r['PATIENT']->PATIENT,
//            $r->SCREENING,
//            $r->SUSPECTED,
//            $r->TOTAL
//            );
//       }


        /*     $draw = array(
                "page" => 1,
                "pages" => 1,
                "perpage" => -1,
                "total" => 6,
                "sort" => "asc",
                "field" => "CURRENT_GOVERNORATE_ID"
            );

            $result = array(
                "meta" => $draw,
                "data" => $data
            ); */

        echo json_encode($res);
    }


}
