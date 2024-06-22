<?php class Risk_model extends CI_Model
      {


    public function insert_risk()
    {

        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $this->input->post('PERSON_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_VISIT_ID', 'value' => $this->input->post('VISIT_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_FAMILY_HEARING', 'value' => $this->input->post('RISK_FAMILY_HEARING'), 'type' => '', 'length' => -1),
            array('name' => ':P_NICU', 'value' => $this->input->post('RISK_NICU'), 'type' => '', 'length' => -1),
            array('name' => ':P_CONGENITAL', 'value' => $this->input->post('RISK_CONGENITAL'), 'type' => '', 'length' => -1),
            array('name' => ':P_BLOOD_EXCHANGE', 'value' => $this->input->post('RISK_BLOOD_EXCHANGE'), 'type' => '', 'length' => -1),
            array('name' => ':P_PREMATURITY', 'value' => $this->input->post('RISK_PREMATURITY'), 'type' => '', 'length' => -1),
            array('name' => ':P_DELIVERY_TYPE', 'value' => $this->input->post('RISK_DELIVERY_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':P_CONSANGUINTY', 'value' => $this->input->post('RISK_CONSANGUINTY'), 'type' => '', 'length' => -1),
            array('name' => ':P_PREGNANCY_DURING', 'value' => $this->input->post('RISK_PREGNANCY_DURING'), 'type' => '', 'length' => -1),
            array('name' => ':P_RISK_NOTE', 'value' => $this->input->post('RISK_NOTE'), 'type' => '', 'length' => -1),
            array('name' => ':P_RISK_DATE', 'value' => date('d/m/Y'), 'type' => '', 'length' => -1),
            array('name' => ':P_CREATED_BY', 'value' => $_SESSION['USER_ID'], 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT', 'value' => 'result', 'type' => '', 'length' => -1)
        );

        $res = $this->dbconn->excuteProcedures('HS_PKG', 'INSERT_RISK_FACTORS_PR', $params);
        return $res["result"];
    }
    public function get_risk_data($id)
    {
        $params = array(
            array('name' => ':P_PERSON_ID', 'value' => $id, 'type' => '', 'length' => -1),
            array('name' => ':RESULT_OUT', 'value' => 'result', 'type' => 'cur', 'length' => -1)
        );
        $res = $this->dbconn->excuteProcedures('HS_PKG', 'GET_RISK_FACTORS_DATA_PR', $params);
        // print_r($params);exit;
        return $res ['result'];
    }

      }

?>