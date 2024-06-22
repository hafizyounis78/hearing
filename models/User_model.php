<?php class User_model extends CI_Model
      {

// by saleh abuamonah start
    public function GET_RTC_USER_PERMISSION()
    {
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_USER_ID', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':USER_PERMISSION', 'value' => 'USER_PERMISSION', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_RTC_USER_PERMISSION_PR', $params);
        return $res['USER_PERMISSION'];

    }
    
        public function GET_USER_DETAILS($P_RTC_USER_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_USER_ID', 'value' => $P_RTC_USER_ID, 'type' => '', 'length' => -1),
            array('name' => ':USER_PERMISSION', 'value' => 'USER_PERMISSION', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_SYSTEM_PKG', 'GET_RTC_USER_PERMISSION_PR', $params);
        return $res['USER_PERMISSION'];

    }


        public function GET_USER_LIST_DATA()
    {
        $curs = '';
        $params = array(
            array('name' => ':USER_LIST', 'value' => 'USER_LIST', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_PERMISSIONS_PKG', 'GET_RTC_USER_PR', $params);
//             print_r($res);
//             exit();
        return $res['USER_LIST'];

    }
    
    
         public function GET_C_RTC_CENTER_PR()
    {
        $curs = '';
        $params = array(
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_CONSTANT_PKG', 'GET_C_RTC_CENTER_PR', $params);
        return $res['CUR'];

    }

       public function GET_C_RTC_TITLE_PR()
    {
        $curs = '';
        $params = array(
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_CONSTANT_PKG', 'GET_C_RTC_TITLE_PR', $params);
        return $res['CUR'];

    }
    
       public function GET_USER_LOC_PR()
    {
        $curs = '';
        $params = array(
            array('name' => ':LOC_LIST', 'value' => 'LOC_LIST', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('RTC_PERMISSIONS_PKG', 'GET_USER_LOC_PR', $params);
        return $res['LOC_LIST'];

    }
    
          public function RTC_USER_INSERT($P_RTC_USER_ID,$P_EMP_NAME,$P_RTC_CENTER_ID,$P_TITLE_ID,$P_EMP_NUM,$P_USER_LOC_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_USER_ID', 'value' =>  $P_RTC_USER_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_EMP_NAME', 'value' => $P_EMP_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_RTC_CENTER_ID', 'value' => $P_RTC_CENTER_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_TITLE_ID', 'value' => $P_TITLE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_EMP_NUM', 'value' => $P_EMP_NUM, 'type' => '', 'length' => -1),
            array('name' => ':P_USER_LOC_ID', 'value' => $P_USER_LOC_ID, 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_PERMISSIONS_PKG', 'RTC_USER_INSERT_PR', $params);
        return $res;

    }

          public function RTC_USER_UPDATE($P_RTC_USER_ID,$P_EMP_NAME,$P_RTC_CENTER_ID,$P_TITLE_ID,$P_EMP_NUM,$P_USER_LOC_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_RTC_USER_ID', 'value' =>  $P_RTC_USER_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_EMP_NAME', 'value' => $P_EMP_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_RTC_CENTER_ID', 'value' => $P_RTC_CENTER_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_TITLE_ID', 'value' => $P_TITLE_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_EMP_NUM', 'value' => $P_EMP_NUM, 'type' => '', 'length' => -1),
            array('name' => ':P_USER_LOC_ID', 'value' => $P_USER_LOC_ID, 'type' => '', 'length' => -1),
            array('name' => ':PR_RESULT', 'value' => 'PR_RESULT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('RTC_PERMISSIONS_PKG', 'RTC_USER_UPDATE_PR', $params);
           /*    print_r($params);
              exit; */
        return $res;

    }




    // by saleh abuamonah end

   }

?>