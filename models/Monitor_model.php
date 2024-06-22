<?php class Monitor_model extends CI_Model
      {

// by saleh abuamonah start
    public function GET_CORONA_DATA($P_ID,$P_PASSNO)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_ID', 'value' => $P_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_PASSNO', 'value' => $P_PASSNO, 'type' => '', 'length' => -1),
            array('name' => ':CURS_OUT', 'value' => 'CURS_OUT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_CORONA_DATA', $params);
        return $res['CURS_OUT'];

    }

       public function GET_CORONA_DATA_SEARCH($P_ID,$P_PASSNO,$P_NAME,$P_CROSS,$P_CLASS,$P_CENTER,$P_QUAR_FROM_DATE,$P_QUAR_TO_DATE,$P_QUAR_IN_DATE,$P_QUAR_OUT_DATE,$P_QUAR_EXPECT_DATE,$P_SEX,$P_SHOW,$P_TEST_RESULT)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_ID','value'=>$P_ID,'type'=>'','length'=> -1),
            array('name' => ':P_PASSNO','value'=>$P_PASSNO,'type'=>'','length'=> -1),
            array('name' => ':P_NAME','value'=>$P_NAME,'type'=>'','length'=> -1),
            array('name' => ':P_CROSS','value'=>$P_CROSS,'type'=>'','length'=> -1),
            array('name' => ':P_CLASS','value'=>$P_CLASS,'type'=>'','length'=> -1),
            array('name' => ':P_CENTER','value'=>$P_CENTER,'type'=>'','length'=> -1),
            array('name' => ':P_QUAR_FROM_DATE','value'=>$P_QUAR_FROM_DATE,'type'=>'','length' => -1),
            array('name' => ':P_QUAR_TO_DATE','value'=>$P_QUAR_TO_DATE,'type'=>'','length'=> -1),
            array('name' => ':P_QUAR_IN_DATE','value'=>$P_QUAR_IN_DATE,'type'=>'','length'=> -1),
            array('name' => ':P_QUAR_OUT_DATE','value'=>$P_QUAR_OUT_DATE,'type'=>'','length'=> -1),
            array('name' => ':P_QUAR_EXPECT_DATE','value'=>$P_QUAR_EXPECT_DATE,'type' =>'','length'=> -1),
            array('name' => ':P_SEX','value'=>$P_SEX,'type'=>'','length'=> -1),
            array('name' => ':P_SHOW','value'=>$P_SHOW,'type'=>'','length'=> -1),
            array('name' => ':P_TEST_RESULT','value'=>$P_TEST_RESULT,'type'=>'','length'=> -1),

            array('name' => ':CURS_OUT','value'=>'CURS_OUT','type' =>'cur','length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_CORONA_DATA_SEARCH', $params);
//            print_r($res);exit;
        return $res['CURS_OUT'];

    }
    
        public function GET_CORONA_MOVE_DATA($M_DATE,$M_STATUS_CD,$M_P_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':M_DATE','value'=>$M_DATE,'type'=>'','length'=> -1),
            array('name' => ':M_STATUS_CD','value'=>$M_STATUS_CD,'type'=>'','length'=> -1),
            array('name' => ':P_ID','value'=>$M_P_ID,'type'=>'','length'=> -1),
            array('name' => ':CURS_OUT','value'=>'CURS_OUT','type' =>'cur','length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_PATIENT_MOVES_BY_DATE', $params);
//            print_r($res);exit;
        return $res['CURS_OUT'];

    }

      public function GET_QUARA_CLASS()
    {
        $curs = '';
        $params = array(
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_QUARA_CLASS', $params);
        return $res['CUR'];

    }
          public function GET_QUARA_CENTER()
    {
        $curs = '';
        $params = array(
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_QUARA_CENTER', $params);
        return $res['CUR'];

    }
    
     public function GET_TYPE_OF_MOVE()
    {
        $curs = '';
        $params = array(
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_TYPE_OF_MOVE', $params);
        return $res['CUR'];

    }
    


     public function GET_LAB_HISTORY($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_ID', 'value' => $P_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_FIRST_NAME', 'value' => $FIRST_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_SECOND_NAME', 'value' => $SECOND_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_THIRD_NAME', 'value' => $THIRD_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_LAST_NAME', 'value' => $LAST_NAME, 'type' => '', 'length' => -1),
            array('name' => ':CURS_OUT', 'value' => 'CURS_OUT', 'type' => 'cur', 'length' => -1));
         $res= $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_PATIENT_LAB_HISTORY', $params);
         return $res['CURS_OUT'];

    }

       public function GET_MOVE_HISTORY($PCID,$P_PASS_NO)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_ID', 'value' => $PCID, 'type' => '', 'length' => -1),
            array('name' => ':P_PASS_NO', 'value' => $P_PASS_NO, 'type' => '', 'length' => -1),
            array('name' => ':CURS_OUT', 'value' => 'CURS_OUT', 'type' => 'cur', 'length' => -1));
         $res= $this->dbconn->excuteProcedures('CORONA_PKG', 'GET_PATIENT_MOVES_BY_ID', $params);
         return $res['CURS_OUT'];

    }
    




    // by saleh abuamonah end

   }

?>