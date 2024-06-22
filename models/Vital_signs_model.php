<?php class Vital_signs_model extends CI_Model
      {

// by saleh abuamonah start
    public function INSERT_VITAL_SIGNS($P_TEMP,$P_BP_SYSTOLIC,$P_BP_DIASTOLIC,$P_PR,$P_RR,$P_SAO2,$P_GCS,$P_ON_ARRIVAL_OR_DISCHARGE)
    {
        date_default_timezone_set('Asia/Gaza');
        $date = date("yy-m-d H:i");
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_VISIT_ID', 'value' =>  $_SESSION["VISIT_ID"], 'type' => '', 'length' => -1),
            array('name' => ':P_TEMP', 'value' => $P_TEMP, 'type' => '', 'length' => -1),
            array('name' => ':P_BP_SYSTOLIC', 'value' => $P_BP_SYSTOLIC, 'type' => '', 'length' => -1),
            array('name' => ':P_BP_DIASTOLIC', 'value' => $P_BP_DIASTOLIC, 'type' => '', 'length' => -1),
            array('name' => ':P_PR', 'value' => $P_PR, 'type' => '', 'length' => -1),
            array('name' => ':P_RR', 'value' => $P_RR, 'type' => '', 'length' => -1),
            array('name' => ':P_SAO2', 'value' => $P_SAO2, 'type' => '', 'length' => -1),
            array('name' => ':P_GCS', 'value' => $P_GCS, 'type' => '', 'length' => -1),
            array('name' => ':P_VITAL_SIGNS_DATE_TIME', 'value' => $date, 'type' => '', 'length' => -1),
            array('name' => ':P_ON_ARRIVAL_OR_DISCHARGE', 'value' => $P_ON_ARRIVAL_OR_DISCHARGE, 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'RTC_VITAL_SIGNS_INSERT_PR', $params);
          //print_r($params);
        //  exit();
        /* print_r($res);
         exit(); */
        return $res;

    }
    
     public function UPDATE_VITAL_SIGNS($P_RTC_VITAL_SIGNS_ID,$P_TEMP,$P_BP_SYSTOLIC,$P_BP_DIASTOLIC,$P_PR,$P_RR,$P_SAO2,$P_GCS,$P_ON_ARRIVAL_OR_DISCHARGE)
    {
        date_default_timezone_set('Asia/Gaza');
        $date = date("yy-m-d H:i");
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_VISIT_ID', 'value' => $P_RTC_VITAL_SIGNS_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_TEMP', 'value' => $P_TEMP, 'type' => '', 'length' => -1),
            array('name' => ':P_BP_SYSTOLIC', 'value' => $P_BP_SYSTOLIC, 'type' => '', 'length' => -1),
            array('name' => ':P_BP_DIASTOLIC', 'value' => $P_BP_DIASTOLIC, 'type' => '', 'length' => -1),
            array('name' => ':P_PR', 'value' => $P_PR, 'type' => '', 'length' => -1),
            array('name' => ':P_RR', 'value' => $P_RR, 'type' => '', 'length' => -1),
            array('name' => ':P_SAO2', 'value' => $P_SAO2, 'type' => '', 'length' => -1),
            array('name' => ':P_GCS', 'value' => $P_GCS, 'type' => '', 'length' => -1),
            array('name' => ':P_VITAL_SIGNS_DATE_TIME', 'value' => $date, 'type' => '', 'length' => -1),
            array('name' => ':P_ON_ARRIVAL_OR_DISCHARGE', 'value' => $P_ON_ARRIVAL_OR_DISCHARGE, 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'RTC_VITAL_SIGNS_UPDATE_PR', $params);
          /* print_r($params);
          exit();
         print_r($res);
         exit(); */
        return $res;

    }
    
           public function DELETE_VITAL_SIGNS($RTC_VITAL_SIGNS_ID)
    {
        $curs = '';
        $params = array(
              array('name' => ':P_RTC_VITAL_SIGNS_ID', 'value' => $RTC_VITAL_SIGNS_ID, 'type' => '', 'length' => -1),
              array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'RTC_VITAL_SIGNS_DELETE_PR', $params);
         /* print_r($params);
               exit; */
        return $res;
    }
            public function GET_PATIENT_VITAL_SIGNS()
    {
        $curs = '';
        $params = array(
              array('name' => ':P_PERSON_SERIAL_ID', 'value' => $_SESSION["PATIENT_SERIAL"], 'type' => '', 'length' => -1),
              array('name' => ':PATIENT_VITAL_SIGNS', 'value' => 'PATIENT_VITAL_SIGNS', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_PATIENT_VITAL_SIGNS_PR', $params);
        return $res['PATIENT_VITAL_SIGNS'];

    }
    
     public function GET_THIS_VITAL_SIGNS($RTC_VITAL_SIGNS_ID)
    {
        $curs = '';
        $params = array(
              array('name' => ':P_RTC_VISIT_ID', 'value' => $RTC_VITAL_SIGNS_ID, 'type' => '', 'length' => -1),
              array('name' => ':VISIT_VITAL_SIGNS', 'value' => 'VISIT_VITAL_SIGNS', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_ONE_VITAL_SIGNS_PR', $params);
        return $res['VISIT_VITAL_SIGNS'];

    }
    
       public function GET_VISIT_VITAL_SIGNS()
    {
        $curs = '';
        $params = array(
              array('name' => ':P_RTC_VISIT_ID', 'value' => $_SESSION["VISIT_ID"], 'type' => '', 'length' => -1),
              array('name' => ':VISIT_VITAL_SIGNS', 'value' => 'VISIT_VITAL_SIGNS', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_VISIT_VITAL_SIGNS_PR', $params);
        return $res['VISIT_VITAL_SIGNS'];

    }


    // by saleh abuamonah end

   }

?>