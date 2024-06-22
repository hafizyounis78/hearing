<?php class Referral_model extends CI_Model
{

    public function insert_referral()
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ID', 'value' => $this->input->post('VISIT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_TRANSFORMATION', 'value' => $this->input->post('RM_TRANSFORMATION_CD'), 'type' => '', 'length' => -1),
            array('name' => ':P_RM_DATE', 'value' => $this->input->post('RM_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_REQUIRED_EXAM', 'value' => $this->input->post('RM_REQUIRED_EXAMINATION'), 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_REASON_REFERRAL', 'value' => $this->input->post('RE_REASON_REFERRAL'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_REFERRAL_MODEL', $params);
        return $res["result"];
    }


    public function getReferralPatientRecordsCount($P_PERSON_ID, $P_PATIENT_NAME, $P_FROM_DATE, $P_TO_DATE, $P_SHOW)
    {
        $center_id = $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        //$center_id =3958;//for test

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            //  array('name' => ':P_SHOW', 'value' => $P_SHOW, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_REFERRAL_MODEL_COUNT_PR', $params);

        return $res["result"];
    }

    public function getReferralPatientRecords($P_PERSON_ID, $P_PATIENT_NAME, $P_FROM_DATE, $P_TO_DATE, $P_SHOW, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {
        $center_id = $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        // $center_id =3958;//for test
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            //     array('name' => ':P_SHOW', 'value' => $P_SHOW, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_REFERRAL_MODEL_RECORDS_PR', $params);
        // print_r($res);exit;
        return $res["result"];
    }

    public function getReferralFromPatientRecordsCount($P_PERSON_ID, $P_PATIENT_NAME, $P_FROM_DATE, $P_TO_DATE, $P_SHOW)
    {
        $center_id = $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        //$center_id =3958;//for test

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            //  array('name' => ':P_SHOW', 'value' => $P_SHOW, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_REFERRAL_FROM_COUNT_PR', $params);

        return $res["result"];
    }

    public function getReferralFromPatientRecords($P_PERSON_ID, $P_PATIENT_NAME, $P_FROM_DATE, $P_TO_DATE, $P_SHOW, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {
        $center_id = $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        // $center_id =3958;//for test
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
      //  print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_REFERRAL_FROM_RECORDS_PR', $params);

        return $res["result"];
    }

    public function get_hearing_aid_datatable()
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_HEARING_BYID_PR', $params);
        return $res["result"];
    }
    public function insert_hearing_aid()
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ID', 'value' => $this->input->post('VISIT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_HEARING_SIDE', 'value' => $this->input->post('HEARING_SIDE'), 'type' => '', 'length' => -1),
            array('name' => ':P_HEARING_MODEL', 'value' => $this->input->post('HEARING_MODEL'), 'type' => '', 'length' => -1),
            array('name' => ':P_HEARING_FITTIY_DATE', 'value' => $this->input->post('HEARING_FITTIY_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_HEARING_SN', 'value' => $this->input->post('HEARING_SN'), 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_HEARING_AIDE_TB_PR', $params);
        return $res["result"];
    }

    public function get_hearing_aid_byid()
    {

        $params = array(
            array('name' => ':P_HEARING_ID', 'value' => $this->input->post('P_HEARING_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_HEARING_AIDE_BY_ID_PR', $params);
        return $res["result"];
    }
    public function delete_hearing_aid_model()
    {

        $params = array(
            array('name' => ':P_ID', 'value' => $this->input->post('P_HEARING_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'DEL_HEARING_AIDE_TB_PR', $params);
        return $res["result"];
    }
}

?>