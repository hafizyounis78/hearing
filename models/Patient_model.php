<?php class Patient_model extends CI_Model
{
    public function getPatientRecordsCount($P_PERSON_ID, $P_PATIENT_NAME, $P_FROM_DATE, $P_TO_DATE, $P_SHOW)
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_SHOW', 'value' => $P_SHOW, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_PATIENT_RISK_COUNT_PR', $params);

        return $res["result"];
    }
    public function getPatientRecords($P_PERSON_ID, $P_PATIENT_NAME, $P_FROM_DATE, $P_TO_DATE, $P_SHOW,$P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_SHOW', 'value' => $P_SHOW, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        //print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_PATIENT_RISK_RECORDS_PR', $params);

        return $res["result"];
    }
    public function get_patient_data($id)
    {
        $params = array(
            array('name' => ':P_VISIT_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_PERSON_DATA_PR', $params);
        // print_r($params);exit;
        return $res ['result'];
    }
    public function get_patient_by_id($id)
    {
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        //print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_PATIENT_BY_ID_PR', $params);
        //print_r($res ['result'][0]);exit;
        return $res ['result'];
    }
    public function del_medical_file($id)
    {
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'DEL_PATIENT_BY_ID_PR', $params);
        // print_r($params);exit;
        return $res ['result'];
    }
    public function chk_patient_id()
    {
        $params = array(
            array('name' => ':P_DOC_TYPE_ID', 'value' => $this->input->post('DOCUMENT_TYPE_ID'), 'type' => '', 'length' => 1000),
            array('name' => ':P_DOC_ID', 'value' => $this->input->post('DOCUMENT_ID'), 'type' => '', 'length' => 1000),
            array('name' => ':P_FNAME', 'value' => 'P_FNAME', 'type' => '', 'length' => 1000),
            array('name' => ':P_SNAME', 'value' => 'P_SNAME', 'type' => '', 'length' => 1000),
            array('name' => ':P_TNAME', 'value' => 'P_TNAME', 'type' => '', 'length' => 1000),
            array('name' => ':P_LNAME', 'value' => 'P_LNAME', 'type' => '', 'length' => 1000),
            array('name' => ':P_STR', 'value' => 'P_STR', 'type' => '', 'length' => 1000),
            array('name' => ':P_FATH_ID', 'value' => 'P_FATH_ID', 'type' => '', 'length' => 1000),
            array('name' => ':P_MOTH_ID', 'value' => 'P_MOTH_ID', 'type' => '', 'length' => 1000),
            array('name' => ':P_PERSONALITY', 'value' => 'P_PERSONALITY', 'type' => '', 'length' => 1000),
            array('name' => ':P_REGION_CODE_ID', 'value' => 'P_REGION_CODE_ID', 'type' => '', 'length' => 1000),
            array('name' => ':P_CITY_CODE_ID', 'value' => 'P_CITY_CODE_ID', 'type' => '', 'length' => 1000),
            array('name' => ':P_SEX_CODE_CD', 'value' => 'P_SEX_CODE_CD', 'type' => '', 'length' => 1000),
            array('name' => ':P_DOB', 'value' => 'P_DOB', 'type' => '', 'length' => 1000),
        );

        // $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'GET_PERSON_INFO_PR', $params);
        $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'GET_CITIZEN_BYID_PR', $params);
        // print_r($res);exit;

        //print_r($res);exit;
        return $res;
    }

    public function update_patient()
    {

        /*  date_default_timezone_set('Asia/Gaza');
          $date = date("Y-m-d H:i");*/
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('P_PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_FIRST_NAME', 'value' => $this->input->post('FIRST_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_SECOND_NAME', 'value' => $this->input->post('SECOND_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_THIRD_NAME', 'value' => $this->input->post('THIRD_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_LAST_NAME', 'value' => $this->input->post('LAST_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_DOB', 'value' => $this->input->post('DOB'), 'type' => '', 'length' => -1),
            array('name' => ':P_SEX_ID', 'value' => $this->input->post('SEX_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_DISTRICT_ID', 'value' => $this->input->post('DISTRICT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CITY_ID', 'value' => $this->input->post('CITY_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CURRENT_ADDRESS', 'value' => $this->input->post('CURRENT_ADDRESS'), 'type' => '', 'length' => -1),
            array('name' => ':P_MOBILE_NUM', 'value' => $this->input->post('MOBILE_NUM'), 'type' => '', 'length' => -1),
            array('name' => ':P_PHONE_NUM', 'value' => $this->input->post('PHONE_NUM'), 'type' => '', 'length' => -1),
            //   array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_MOTHER_NAME', 'value' => $this->input->post('MOTHER_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_MOTHER_AGE', 'value' => $this->input->post('MOTHER_AGE'), 'type' => '', 'length' => -1),
            array('name' => ':P_MONTHLY_INCOME', 'value' => $this->input->post('MONTHLY_INCOME'), 'type' => '', 'length' => -1),
            array('name' => ':P_CITIZENSHIP', 'value' => $this->input->post('CITIZENSHIP'), 'type' => '', 'length' => -1),
            array('name' => ':P_FAMILY_CARD', 'value' => $this->input->post('FAMILY_CARD'), 'type' => '', 'length' => -1),
            //  array('name' => ':P_PERSON_SERIAL_ID', 'value' => 'PERSON_SERIAL_ID', 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'PERSON_UPDATE_PR', $params);

        return $res ['result'];
    }

    public function insert_patient()
    {
        date_default_timezone_set('Asia/Gaza');
        //$date = date("Y-m-d H:i");
        $timestamp = strtotime($this->input->post('DOB'));
        $dob_date = date("Y-m-d H:i", $timestamp);
        $params = array(
            array('name' => ':P_DOCUMENT_TYPE_ID', 'value' => $this->input->post('DOCUMENT_TYPE_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_DOCUMENT_ID', 'value' => $this->input->post('DOCUMENT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_FIRST_NAME', 'value' => $this->input->post('FIRST_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_SECOND_NAME', 'value' => $this->input->post('SECOND_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_THIRD_NAME', 'value' => $this->input->post('THIRD_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_LAST_NAME', 'value' => $this->input->post('LAST_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_DOB', 'value' => $this->input->post('DOB'), 'type' => '', 'length' => -1),
            array('name' => ':P_SEX_ID', 'value' => $this->input->post('SEX_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_DISTRICT_ID', 'value' => $this->input->post('DISTRICT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CITY_ID', 'value' => $this->input->post('CITY_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CURRENT_ADDRESS', 'value' => $this->input->post('CURRENT_ADDRESS'), 'type' => '', 'length' => -1),
            array('name' => ':P_MOBILE_NUM', 'value' => $this->input->post('MOBILE_NUM'), 'type' => '', 'length' => -1),
            array('name' => ':P_PHONE_NUM', 'value' => $this->input->post('PHONE_NUM'), 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_MOTHER_NAME', 'value' => $this->input->post('MOTHER_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':P_MOTHER_AGE', 'value' => $this->input->post('MOTHER_AGE'), 'type' => '', 'length' => -1),
            array('name' => ':P_MONTHLY_INCOME', 'value' => $this->input->post('MONTHLY_INCOME'), 'type' => '', 'length' => -1),
            array('name' => ':P_CITIZENSHIP', 'value' => $this->input->post('CITIZENSHIP'), 'type' => '', 'length' => -1),
            array('name' => ':P_FAMILY_CARD', 'value' => $this->input->post('FAMILY_CARD'), 'type' => '', 'length' => -1),
            array('name' => ':P_PERSON_SERIAL_ID', 'value' => 'PERSON_SERIAL_ID', 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'PERSON_INSERT_N_PR', $params);
        print_r($res);
        return $res;
    }

//***************

    public function insert_new_visit($PERSON_SERIAL_ID)
    {
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $PERSON_SERIAL_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TYPE', 'value' => 102, 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_STATUS', 'value' => 82, 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ATTEND_CD', 'value' => 109, 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ID', 'value' => 'visit_id', 'type' => '', 'length' => -1)
        );
        // print_r($params);
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_NEW_VISIT', $params);
        //print_r($res);
        return $res ['result'];
    }
    //END::NEW HEARING CODE
    public function getMedicalFileRecordsCount($P_PERSON_ID, $P_PATIENT_NAME)
    {
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
//print($params);exit;
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_PATIENT_COUNT_PR', $params);

        return $res["result"];
    }
    public function getMedicalFileRecords($P_PERSON_ID, $P_PATIENT_NAME, $P_LIMIT, $P_START, $P_ORDER, $P_DIR)
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $P_PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PATIENT_NAME', 'value' => $P_PATIENT_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' => $_SESSION["my_activ_LOCATIONS"]['LOC_CD'], 'type' => '', 'length' => -1),
            array('name' => ':P_LIMIT', 'value' => $P_LIMIT, 'type' => '', 'length' => -1),
            array('name' => ':P_START', 'value' => $P_START, 'type' => '', 'length' => -1),
            array('name' => ':P_ORDER', 'value' => $P_ORDER, 'type' => '', 'length' => -1),
            array('name' => ':P_DIR', 'value' => $P_DIR, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        // print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_PATIENT_RECORDS_PR', $params);

        return $res["result"];
    }

    public function update_patient_id()
    {
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_DOCUMENT_ID', 'value' => $this->input->post('DOCUMENT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
       // print_r($params);exit;
        $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'PERSON_UPDATE_ID_PR', $params);
        return $res ['result'];
    }
}

?>