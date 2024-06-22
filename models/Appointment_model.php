<?php class Appointment_model extends CI_Model
{

    public function insert_appointment()
    {
       $center_id= $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
      //  $center_id=3958;
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' =>  $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' =>$center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TYPE', 'value' => 103, 'type' => '', 'length' => -1),
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
    public function insert_new_appointment()
    {
        $center_id= $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
        //$center_id=3958;
        $APPOINTMENT_DATE = str_replace("+", " ", $this->input->post('APPOINTMENT_DATE'));
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' =>  $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CENTER_ID', 'value' =>$center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_APPOINTMENT_DATE', 'value' =>$APPOINTMENT_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TYPE', 'value' => $this->input->post('VISIT_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_STATUS', 'value' => 82, 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ATTEND_CD', 'value' => 109, 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ID', 'value' => 'visit_id', 'type' => '', 'length' => -1)
        );
       // print_r($params);
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_NEW_APPOINTMENT', $params);
        //print_r($res);
        return $res ['result'];
    }
    public function get_appointments()
    {
         $center_id= $_SESSION["my_activ_LOCATIONS"]['LOC_CD'];
       // $center_id=3958;
        $params = array(
            array('name' => ':P_CENTER_ID', 'value' => $center_id, 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TIME_START', 'value' => $this->input->post('start'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_TIME_END', 'value' => $this->input->post('end'), 'type' => '', 'length' => -1),
            array('name' => ':OUT_RESULT', 'value' => 'OUT_RESULT', 'type' => 'cur', 'length' => -1));

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_APPOINTMENTS_PR', $params);
        // print_r($res);exit;
        return $res['OUT_RESULT'];
    }
    public function attend_visit_model()
    {
        $params = array(
            array('name' => ':P_VISIT_CD', 'value' => $this->input->post('VISIT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'ATTEND_VISIT_PR', $params);
        // print_r($params);exit;
        return $res ['result'];
    }
    public function update_visit_status_model()
    {
        $params = array(
            array('name' => ':P_VISIT_STATUS', 'value' => $this->input->post('VISIT_STATUS'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_CD', 'value' => $this->input->post('VISIT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => '', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'UPDATE_VISIT_STATUS_PR', $params);

        return $res ['result'];
    }
}

?>