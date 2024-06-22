<?php class Register_model extends CI_Model
      {

// by saleh abuamonah start
    public function GET_PERSON_INFO($P_DOC_TYPE_ID,$P_DOC_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_DOC_TYPE_ID', 'value' => $P_DOC_TYPE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_DOC_ID', 'value' => $P_DOC_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':PERSON_DET', 'value' => 'PERSON_DET', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'GET_PERSON_INFO_PR', $params);
      /*   print_r($res['PERSON_DET']);
        exit(); */
        return $res['PERSON_DET'];
    }

        public function CHECK_VISIT_TODAY($P_DOC_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_DOCUMENT_ID', 'value' => $P_DOC_ID, 'type' => '', 'length' => -1),
            array('name' => ':PATIENT_VITSIT_TODAY', 'value' => 'PATIENT_VITSIT_TODAY', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'CHECK_VISIT_TODAY_PR', $params);
/*             print_r($res['PATIENT_VITSIT_TODAY']);
            exit(); */
            return $res['PATIENT_VITSIT_TODAY'];

    }

    public function INSERT_VISIT_CORONA($PERSON_SERIAL_ID,$CURRENT_ADDRESS,$MOBILE_NUM,$PHONE_NUM)
    {
        $P_INSURANCE_ID='';
        date_default_timezone_set('Asia/Gaza');
        $date = date("Y-m-d H:i");
        $curs = '';
        $params = array(
            array('name' => ':P_PERSON_SERIAL_ID', 'value' => $PERSON_SERIAL_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_INSURANCE_ID', 'value' => $P_INSURANCE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_RTC_CENTER_ID', 'value' => $_SESSION['RTC_CENTER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_ARRIVAL_DATE_TIME', 'value' => $date, 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':P_CURRENT_ADDRESS', 'value' => $CURRENT_ADDRESS, 'type' => '', 'length' => -1),
            array('name' => ':P_MOBILE_NUM', 'value' => $MOBILE_NUM, 'type' => '', 'length' => -1),
            array('name' => ':P_PHONE_NUM', 'value' => $PHONE_NUM, 'type' => '', 'length' => -1),
            array('name' => ':P_RTC_VISIT_ID', 'value' => 'P_RTC_VISIT_ID', 'type' => '', 'length' =>-1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'RTC_VISIT_INSERT_PR', $params);
          //print_r($params);
        //  exit();
        /* print_r($res);
         exit(); */
        return $res;

    }
    
     public function INSERT_VISIT_COMPANION($visit_id,$row_serial,$row_phone)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_VISIT_ID', 'value' => $visit_id, 'type' => '', 'length' => -1),
            array('name' => ':P_PERSON_SERIAL_ID', 'value' => $row_serial, 'type' => '', 'length' => -1),
            array('name' => ':P_MOBILE_NUM', 'value' => $row_phone, 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' =>-1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'RTC_COMPANION_INSERT_PR', $params);
        return $res;
    }
    
    
        public function VISIT_DISCHARGE_CORONA($P_DISCHARGE_DATE_TIME,$P_DISCHARGE_DISPOSITION_ID,$P_REFERRED_TO_FACILITY_TYPE_ID,$P_REFERRED_TO_FACILITY_ID,$P_REFERRAL_REASON,$P_REFERRED_BY)
    {
        date_default_timezone_set('Asia/Gaza');
  /*       $date = date("yy-m-d h:i"); */
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_VISIT_ID', 'value' => $_SESSION["VISIT_ID"], 'type' => '', 'length' => -1),
            array('name' => ':P_DISCHARGE_DATE_TIME', 'value' => $P_DISCHARGE_DATE_TIME, 'type' => '', 'length' => -1),
            array('name' => ':P_DISCHARGE_BY', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':P_DISCHARGE_DISPOSITION_ID', 'value' => $P_DISCHARGE_DISPOSITION_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_REFERRED_TO_FACILITY_TYPE_ID', 'value' => $P_REFERRED_TO_FACILITY_TYPE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_REFERRED_TO_FACILITY_ID', 'value' => $P_REFERRED_TO_FACILITY_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_REFERRAL_REASON', 'value' => $P_REFERRAL_REASON, 'type' => '', 'length' => -1),
            array('name' => ':P_REFERRED_BY', 'value' => $P_REFERRED_BY, 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'RTC_VISIT_DISCHARGE_PR', $params);
        /*   print_r($params);
          exit(); */
/*          print_r($res);
         exit(); */
        return $res['PR_RESULT'];

    }
    
        public function UPDATE_VISIT_STATUS($STATUS)
    {
        $curs = '';
        $params = array(
              array('name' => ':P_RTC_VISIT_ID', 'value' => $_SESSION["VISIT_ID"], 'type' => '', 'length' => -1),
              array('name' => ':P_NEW_STATUS', 'value' => $STATUS, 'type' => '', 'length' => -1),
              array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'VISIT_STATUS_UPDATE_PR', $params);
        return $res;
    }

// by saleh abuamonah end

   }

?>