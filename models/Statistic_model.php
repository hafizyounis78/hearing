<?php class Statistic_model extends CI_Model
{

    public function get_stat_no_children_screened()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_CH', 'value' => 'result', 'type' => '', 'length' =>100000)
        );
        //  print_r($params);
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_SCREENED_PR', $params);
        // print_r($res);exit;
        return $res['result'];
    }

    public function get_stat_no_children_bysex()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_MALE', 'value' => 'NO_MALE', 'type' => '', 'length' => -1),
            array('name' => ':P_MALE', 'value' => 'P_MALE', 'type' => '', 'length' => -1),
            array('name' => ':NO_FEMALES', 'value' => 'NO_FEMALES', 'type' => '', 'length' => -1),
            array('name' => ':P_FEMALES', 'value' => 'P_FEMALES', 'type' => '', 'length' => -1),
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_BYSEX_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_no_children_pass_1screen_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_PASS', 'value' => 'NO_PASS', 'type' => '', 'length' => -1),
            array('name' => ':P_PASS', 'value' => 'P_PASS', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_PASS_1SCREEN_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_no_children_pass_2screen_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_PASS', 'value' => 'NO_PASS', 'type' => '', 'length' => -1),
            array('name' => ':P_PASS', 'value' => 'P_PASS', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_PASS_2SCREEN_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_no_children_failed_screen_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_FAILED', 'value' => 'NO_FAILED', 'type' => '', 'length' => -1),
            array('name' => ':P_FAILED', 'value' => 'P_FAILED', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_FAILED_2SCREEN_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_no_children_referred_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_REF_ADT', 'value' => 'NO_REF_ADT', 'type' => '', 'length' => -1),
            array('name' => ':NO_REF_ABR', 'value' => 'NO_REF_ABR', 'type' => '', 'length' => -1),
            array('name' => ':P_REF_ADT', 'value' => 'P_REF_ADT', 'type' => '', 'length' => -1),
            array('name' => ':P_REF_ABR', 'value' => 'P_REF_ABR', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_REFERRALS_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_no_children_abr_test_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_CH', 'value' => 'NO_CH', 'type' => '', 'length' => -1),
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_ABR_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_no_children_with_hearing_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_FAILED', 'value' => 'NO_FAILED', 'type' => '', 'length' => -1),
            array('name' => ':P_FAILED', 'value' => 'P_FAILED', 'type' => '', 'length' => -1),
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_WITH_HEARING_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function get_data_children_hearing_fail_pr()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_FAILED', 'value' => 'NO_FAILED', 'type' => '', 'length' => -1),
            array('name' => ':P_FAILED', 'value' => 'P_FAILED', 'type' => '', 'length' => -1),
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_WITH_HEARING_PR', $params);
        //  print_r($params);exit;
        return $res;
    }

    public function getScreenActivityCount($P_FROM_DATE, $P_TO_DATE)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_CHILDREN_SCREEN_PR', $params);

        return $res["result"];
    }

    public function getScreenActivityRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_CHILDREN_SCREEN_PR2', $params);
        //print_r($params);exit;
        return $res["result"];
    }


    public function getChildFailRecordsCount($P_FROM_DATE, $P_TO_DATE)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_FAILED_2SCREEN_PR', $params);

        return $res["result"];
    }

    public function getChildFailRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_CHILDREN_FAILED_2SCREEN_PR2', $params);
        //  print_r($params);exit;
        return $res["result"];
    }

    public function getReferralRecordsCount($P_FROM_DATE, $P_TO_DATE)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_REFERRAL_MODEL_PR', $params);

        return $res["result"];
    }

    public function getReferralRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_REFERRAL_MODEL_PR2', $params);
        //  print_r($params);exit;
        return $res["result"];
    }

    public function getABRTestRecordsCount($P_FROM_DATE, $P_TO_DATE)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_ABR_TESTS_PR', $params);

        return $res["result"];
    }

    public function getABRTestRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_ABR_TESTS_PR2', $params);
        //  print_r($params);exit;
        return $res["result"];
    }

    public function getABRResultRecordsCount($P_FROM_DATE, $P_TO_DATE)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_ABR_RESULT_PR', $params);

        return $res["result"];
    }

    public function getABRResultRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_ABR_RESULT_PR2', $params);
        //  print_r($params);exit;
        return $res["result"];
    }

    public function getGeneralQryCount()
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_FROM_DATE', 'value' => $this->input->post('P_VISIT_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TO_DATE', 'value' => $this->input->post('P_VISIT_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_OAE_FROM_DATE', 'value' => $this->input->post('P_OAE_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_OAE_TO_DATE', 'value' => $this->input->post('P_OAE_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_REF_FROM_DATE', 'value' => $this->input->post('P_REF_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_REF_TO_DATE', 'value' => $this->input->post('P_REF_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_REF', 'value' => $this->input->post('P_CLINIC_REF'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OAE', 'value' => $this->input->post('P_RESULT_OAE'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ABR', 'value' => $this->input->post('P_RESULT_ABR'), 'type' => '', 'length' => -1),
            array('name' => ':P_SEX', 'value' => $this->input->post('P_SEX'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ONE_OAE', 'value' => $this->input->post('P_RESULT_ONE_OAE'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ADT', 'value' => $this->input->post('P_RESULT_ADT'), 'type' => '', 'length' => -1),
            array('name' => ':P_RISK', 'value' => $this->input->post('P_RISK'), 'type' => '', 'length' => -1),
            array('name' => ':P_HEARING_AID', 'value' => $this->input->post('P_HEARING_AID'), 'type' => '', 'length' => -1),

            array('name' => ':HAS_RISK', 'value' => $this->input->post('has_risk'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_OAE1', 'value' => $this->input->post('has_oae1'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_OAE2', 'value' => $this->input->post('has_oae2'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_ADT', 'value' => $this->input->post('has_adt'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_ABR', 'value' => $this->input->post('has_abr'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)


        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_PR', $params);

        return $res["result"];
    }

    public function getGeneralQryRecords($P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {
        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_FROM_DATE', 'value' => $this->input->post('P_VISIT_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TO_DATE', 'value' => $this->input->post('P_VISIT_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_OAE_FROM_DATE', 'value' => $this->input->post('P_OAE_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_OAE_TO_DATE', 'value' => $this->input->post('P_OAE_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_REF_FROM_DATE', 'value' => $this->input->post('P_REF_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_REF_TO_DATE', 'value' => $this->input->post('P_REF_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_REF', 'value' => $this->input->post('P_CLINIC_REF'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OAE', 'value' => $this->input->post('P_RESULT_OAE'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ABR', 'value' => $this->input->post('P_RESULT_ABR'), 'type' => '', 'length' => -1),
            array('name' => ':P_SEX', 'value' => $this->input->post('P_SEX'), 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ONE_OAE', 'value' => $this->input->post('P_RESULT_ONE_OAE'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ADT', 'value' => $this->input->post('P_RESULT_ADT'), 'type' => '', 'length' => -1),
            array('name' => ':P_RISK', 'value' => $this->input->post('P_RISK'), 'type' => '', 'length' => -1),
            array('name' => ':P_HEARING_AID', 'value' => $this->input->post('P_HEARING_AID'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_RISK', 'value' => $this->input->post('has_risk'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_OAE1', 'value' => $this->input->post('has_oae1'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_OAE2', 'value' => $this->input->post('has_oae2'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_ADT', 'value' => $this->input->post('has_adt'), 'type' => '', 'length' => -1),
            array('name' => ':HAS_ABR', 'value' => $this->input->post('has_abr'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        //print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_QUERYING_PR', $params);
        //  print_r($res["result"]);exit;
        return $res["result"];
    }

    //**************************************NEW
    //********ADT
    public function get_no_children_adt_pr()//ADT
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_CH', 'value' => 'result', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_ADT_PR', $params);
        //  print_r($params);exit;
        return $res ['result'];
    }

    public function getAdtTestCount($P_FROM_DATE, $P_TO_DATE)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_ADT_TESTS_PR', $params);

        return $res["result"];
    }

    public function getAdtTestRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_ADT_TESTS_PR2', $params);
        //print_r($params);exit;
        return $res["result"];
    }
    //******** END ADT
    //********ADT
    public function get_no_children_hearing_pr()//ADT
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $this->input->post('P_FROM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $this->input->post('P_TO_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':NO_CH', 'value' => 'result', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'NO_CHILDREN_HA_PR', $params);
        //  print_r($params);exit;
        return $res ['result'];
    }

    public function getHearingAidCount($P_FROM_DATE, $P_TO_DATE)
    {
        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_COUNT_HEARING_AIDE_PR', $params);

        return $res["result"];
    }

    public function getHearingAidRecords($P_FROM_DATE, $P_TO_DATE, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $this->input->post('P_CENTER_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CLINIC_TYPE', 'value' => $this->input->post('P_CLINIC_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('DASHBOARD_PKG', 'DATA_HEARING_AIDE_PR2', $params);
        print_r($res);exit;
        return $res["result"];
    }
    //******** END ADT
}

?>