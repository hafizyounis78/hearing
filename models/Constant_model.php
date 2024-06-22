<?php class Constant_model extends CI_Model
{

    //BEGING::NEW HEARING CODE
    public function get_lookups_list($id)
    {
        $params = array(
            array('name' => ':P_PARENT_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_LOOKUPS_LIST_PR', $params);
        // print_r($params);exit;
        return $res ['result'];
    }


    public function get_lookups_desc($id)
    {
        $params = array(
            array('name' => ':P_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => '', 'length' => 2000)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_LOOKUPS_DESC_PR', $params);
        //print_r($res ['result']);
        return $res ['result'];
    }
    public function get_lookups_en_desc($id)
    {
        $params = array(
            array('name' => ':P_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => '', 'length' =>2000)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_LOOKUPS_EN_DESC_PR', $params);
        //  print_r($res ['result']);exit;
        return $res ['result'];
    }
//***************
    public function get_geolocation_list($id)
    {
        $params = array(
            array('name' => ':P_PARENT_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_GEOLOCATION_TB_PR', $params);
        // print_r($params);exit;
        return $res ['result'];
    }
    public function get_referral_center($center_id)
    {
        $params = array(
            array('name' => ':P_CLINIC_CD', 'value' => $center_id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_REFERRAL_TO_PR', $params);
        return $res["result"];
    }
    public function get_all_center()
    {
        $params = array(
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_ALL_CENTER_PR', $params);
        return $res["result"];
    }
    public function get_center_by_type($type_id)
    {
        $params = array(
            array('name' => ':P_PHC_TYPE_ID', 'value' => $type_id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_CENTER_BY_PARENT_PR', $params);
        return $res["result"];
    }
    //END::NEW HEARING CODE

}

?>