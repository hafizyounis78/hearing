<?php class Dashboard_model extends CI_Model
{

// by saleh abuamonah start


    public function GET_COUNT_PATIENT($P_FROM_DATE,$P_TO_DATE,$P_CENTER)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER', 'value' => $P_CENTER, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'P_RESULT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_COUNT_PATIENT', $params);
        /* print_r($params);
            exit; */
        return $res['P_RESULT'];

    }


    public function GET_COUNT_PATIENT_DETAILS($P_CENTER,$P_TO_DATE,$P_FROM_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_CENTER_ID', 'value' => $P_CENTER, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':REPORT', 'value' => 'REPORT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_RTC_STATISTICAL_REPORT_PR', $params);
        /* print_r($params);
            exit; */
        return $res['REPORT'];

    }



    public function GET_REQUEST_TYPE($P_FROM_DATE,$P_TO_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_RPT', 'value' => 'RESULT_RPT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('COVID_DASHBOARD_PKG', 'GET_RESULT_BY_REQUEST_TYPE_PR', $params);
        /*         print_r($res);
                    exit; */
        return $res['RESULT_RPT'];

    }

    public function GET_REQUEST_TYPE_BY_GOV($P_FROM_DATE,$P_TO_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_RPT', 'value' => 'RESULT_RPT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('COVID_DASHBOARD_PKG', 'GET_REQUEST_TYPE_BY_GOV_PR', $params);
        /*         print_r($res);
                    exit; */
        return $res['RESULT_RPT'];

    }
    public function GET_REQUEST_TYPE_BY_GOV_DETAIL_PR($CURRENT_GOVERNORATE_ID,$P_FROM_DATE,$P_TO_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_CURRENT_GOVERNORATE_ID', 'value' => $CURRENT_GOVERNORATE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_RPT', 'value' => 'RESULT_RPT', 'type' => 'cur', 'length' => 100));
          //  print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('COVID_DASHBOARD_PKG', 'GET_REQUEST_TYPE_RESULT_BY_GOV_PR', $params);
        /*         print_r($res);
                    exit; */
        return $res['RESULT_RPT'];

    }

        public function GET_REQUEST_TYPE_STAFF_BY_CITY($CURRENT_GOVERNORATE_ID,$P_FROM_DATE,$P_TO_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_CURRENT_GOVERNORATE_ID', 'value' => $CURRENT_GOVERNORATE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_RPT', 'value' => 'RESULT_RPT', 'type' => 'cur', 'length' => 100));
          //  print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('COVID_DASHBOARD_PKG', 'GET_REQUEST_TYPE_STAFF_BY_CITY_PR', $params);
               /*  print_r($res);
                    exit; */
        return $res['RESULT_RPT'];

    }
    
            public function GET_REQUEST_TYPE_STAFF_BY_NEIGHBORHOOD($CURRENT_NEIGHBORHOOD_ID,$P_FROM_DATE,$P_TO_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_NEIGHBORHOOD_ID', 'value' => $CURRENT_NEIGHBORHOOD_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_RPT', 'value' => 'RESULT_RPT', 'type' => 'cur', 'length' => 100));
          //  print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('COVID_DASHBOARD_PKG', 'GET_RESULT_STAFF_BY_NEIGHBORHOOD_PR', $params);
               /*  print_r($res);
                    exit; */
        return $res['RESULT_RPT'];

    }


    public function GET_REQUEST_TYPE_STAFF_BY_GOV_PR($P_FROM_DATE,$P_TO_DATE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_FROM', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_RPT', 'value' => 'RESULT_RPT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('COVID_DASHBOARD_PKG', 'GET_REQUEST_TYPE_STAFF_BY_GOV_PR', $params);
        /*         print_r($res);
                    exit; */

        return $res['RESULT_RPT'];

    }




    // by saleh abuamonah end

}

?>