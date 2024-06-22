<?php class Lab_result_model extends CI_Model
      {

// by saleh abuamonah start

    
        public function GET_LAB_RESULT_COUNT($P_FROM_DATE,$P_TO_DATE,$P_RESULT_TYPE)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_TYPE', 'value' => $P_RESULT_TYPE, 'type' => '', 'length' => -1),
            array('name' => ':CURS_OUT', 'value' => 'CURS_OUT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_LAB_RESULT', $params);
        return $res['CURS_OUT'];

    }

    // by saleh abuamonah end

   }

?>