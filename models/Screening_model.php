<?php class Screening_model extends CI_Model
{

    public function insert_screening()
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ID', 'value' => $this->input->post('VISIT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_TEST_TYPE', 'value' => $this->input->post('P_TEST_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TEST_SITE', 'value' => $this->input->post('P_TEST_SITE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TEST_RESULT', 'value' => $this->input->post('P_TEST_RESULT'), 'type' => '', 'length' => -1),
            array('name' => ':P_TEST_DATE', 'value' => $this->input->post('P_TEST_DATE'), 'type' => '', 'length' => -1),
            array('name' => ':P_TEST_NOTE', 'value' => $this->input->post('P_TEST_NOTE'), 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_ID', 'value' => 'P_RESULT_ID', 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_TEST_RESULT_PR', $params);
        $recomand_list = array();
        $recomand_list = $this->input->post('P_TEST_RECOM');

       // echo 'recomand_list count:'.count($recomand_list);exit;
        if (count($recomand_list) > 0)
            if($this->input->post('P_TEST_TYPE')==100||$this->input->post('P_TEST_TYPE')==99) {
            for ($i = 0; $i < count($recomand_list); ++$i) {
            /*   echo 'P_RESULT_ID :'.$res["P_RESULT_ID"];
                echo 'recomand_list'.$recomand_list[$i];*/
                $params = array(
                    array('name' => ':P_RESULT_ID', 'value' => $res["P_RESULT_ID"], 'type' => '', 'length' => -1),
                    array('name' => ':P_TEST_RECOM', 'value' => $recomand_list[$i], 'type' => '', 'length' => -1),
                    array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
                    array('name' => ':RESULT', 'value' => 'ERR_OUT_R', 'type' => '', 'length' => -1)
                );
                $res2 = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_TEST_RESULT_RECOM_PR', $params);
            }
        }
        return $res["result"];
    }

    public function get_screening_datatable()
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_TEST_RESULT_PR', $params);
        return $res["result"];
    }
    public function delete_screening_model()
    {

        $params = array(
            array('name' => ':P_RESULT_ID', 'value' => $this->input->post('P_RESULT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'DEL_TEST_RESULT_PR', $params);
        return $res["result"];
    }
    public function get_screening_by_id()
    {

        $params = array(
            array('name' => ':P_RESULT_ID', 'value' => $this->input->post('P_RESULT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_TEST_RESULT_BY_ID_PR', $params);
        return $res["result"];
    }
    public function get_scree_recom_by_id()
    {

        $params = array(
            array('name' => ':P_RESULT_ID', 'value' => $this->input->post('P_RESULT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_TEST_RESULT_RECM_BY_ID_PR', $params);
        return $res["result"];
    }
}

?>