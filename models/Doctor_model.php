<?php class Doctor_model extends CI_Model
{
    public function get_screening_datatable($PERSON_ID)
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_TEST_RESULT_PR', $params);
        return $res["result"];
    }
    public function get_screening_rep_datatable($PERSON_ID,$CENTER_TYPE)
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_TYPE', 'value' =>$CENTER_TYPE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_TEST_RES_PR', $params);
        return $res["result"];
    }
    public function get_referral_datatable($PERSON_ID)
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $PERSON_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_REFERRAL_MODEL_BYID_PR', $params);
        return $res["result"];
    }

}

?>