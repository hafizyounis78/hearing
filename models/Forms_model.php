<?php class Forms_model extends CI_Model
      {

// by saleh abuamonah start
    public function GET_INFECTED_PR($P_NAME,$P_ID)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_NAME', 'value' => $P_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_ID', 'value' => $P_ID, 'type' => '', 'length' => -1),
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'GET_INFECTED_PR', $params);
        return $res['CUR'];

    }

        public function GET_CONTACTED_PR($P_NAME_CONTACTED,$P_ID_CONTACTED)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_NAME', 'value' => $P_NAME_CONTACTED, 'type' => '', 'length' => -1),
            array('name' => ':P_ID', 'value' => $P_ID_CONTACTED, 'type' => '', 'length' => -1),
            array('name' => ':CUR', 'value' => 'CUR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'GET_CONTACTED_PR', $params);
        return $res['CUR'];

    }
    
    

       public function INSERT_P_QUESTIONS_ANSWERS($QUESTION1,$QUESTION1_TEMPERATURE,$QUESTION1_TEMPERATURE_NUM,$QUESTION1_COUGH,$QUESTION1_THROAT,$QUESTION1_SMELLING_TASTING,$QUESTION1_OTHERS,$QUESTION1_OTHERS_SYNDROME,$QUESTION2_BREATHE,$QUESTION2_COUNT_OF_BREATHE,$QUESTION3_CONTACT_PERSONS,$QUESTION3_CONTACT_PERSONS_COUNT,$QUESTION3_CP_HAVE_SYNDROME,$QUESTION3_SAFETY_INSTRUCTIONS,$QUESTION3_SAFETY_MEASURES,$QUESTION4_PULS,$QUESTION4_PULS_COUNT,$RECOMMENDATION,$RECOMMEND_DETAILS,$PERSON_SERIAL)
    {
        date_default_timezone_set('Asia/Gaza');
        $date = date("yy-m-d H:i");
        $curs = '';
        $params = array(
            array('name' => ':QUESTION1_IN', 'value' => $QUESTION1, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_TEMPERATURE_IN', 'value' => $QUESTION1_TEMPERATURE, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_TEMPERATURE_NUM_IN', 'value' => $QUESTION1_TEMPERATURE_NUM, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_COUGH_IN', 'value' => $QUESTION1_COUGH, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_THROAT_IN', 'value' => $QUESTION1_THROAT, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_SMELLING_TASTING_IN', 'value' => $QUESTION1_SMELLING_TASTING, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_OTHERS_IN', 'value' => $QUESTION1_OTHERS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_OTHERS_SYNDROME_IN', 'value' => $QUESTION1_OTHERS_SYNDROME, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION2_BREATHE_IN', 'value' => $QUESTION2_BREATHE, 'type' => '', 'length' =>-1),
            array('name' => ':QUESTION2_COUNT_OF_BREATHE_IN', 'value' => $QUESTION2_COUNT_OF_BREATHE, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION3_CONTACT_PERSONS_IN', 'value' => $QUESTION3_CONTACT_PERSONS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION3_CONTACT_PERSONS_COUNT_IN', 'value' => $QUESTION3_CONTACT_PERSONS_COUNT, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION3_CP_HAVE_SYNDROME_IN', 'value' => $QUESTION3_CP_HAVE_SYNDROME, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION3_SAFETY_INSTRUCTIONS_IN', 'value' => $QUESTION3_SAFETY_INSTRUCTIONS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION3_SAFETY_MEASURES_IN', 'value' => $QUESTION3_SAFETY_MEASURES, 'type' => '', 'length' =>-1),
            array('name' => ':QUESTION4_PULS_IN', 'value' => $QUESTION4_PULS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION4_PULS_COUNT_IN', 'value' => $QUESTION4_PULS_COUNT, 'type' => '', 'length' => -1),
            array('name' => ':RECOMMENDATION_IN', 'value' => $RECOMMENDATION, 'type' => '', 'length' => -1),
            array('name' => ':RECOMMEND_DETAILS_IN', 'value' => $RECOMMEND_DETAILS, 'type' => '', 'length' => -1),
            array('name' => ':PERSON_SERIAL_IN', 'value' => $PERSON_SERIAL, 'type' => '', 'length' => -1),
            array('name' => ':PATIENT_ID_IN', 'value' => $_SESSION["PATIENT_DOCUMENT_ID"], 'type' => '', 'length' => -1),
            array('name' => ':CREATED_BY_IN', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':CREATED_DATE_IN', 'value' => $date, 'type' => '', 'length' =>-1),
            array('name' => ':STATUS_OUT', 'value' => 'STATUS_OUT', 'type' => '', 'length' =>-1),
            array('name' => ':SERIAL_ID_OUT', 'value' => 'SERIAL_ID_OUT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'INSERT_P_QUESTIONS_ANSWERS', $params);
          /* print_r($params);
          exit(); */
        /* print_r($res);
         exit(); */
        return $res;

    }

     public function INSERT_P_QUESTIONS_ANSWERS_DETAILS($serial_id,$contact_name)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_QUESTIONS_ANSWERS_ID_IN', 'value' => $serial_id, 'type' => '', 'length' => -1),
            array('name' => ':Q3_CP_HAVE_SYNDROME_TEXT_IN', 'value' => $contact_name, 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'INSERT_P_QUESTIONS_ANSWERS_DETAILS', $params);
        return $res;
    }
    
         public function INSERT_CP_QUESTIONS_ANSWERS($QUESTION1,$QUESTION1_TEMPERATURE,$QUESTION1_TEMPERATURE_NUM,$QUESTION2_COUGH,$QUESTION3_THROAT,$QUESTION4_SMELLING_TASTING,$QUESTION5_OTHERS,$QUESTION5_OTHERS_SYNDROME,$QUESTION6_CONTACT_PERSONS,$QUESTION7_CP_HAVE_SYNDROME,$QUESTION8_SAFETY_INSTRUCTIONS,$QUESTION9_SAFETY_MEASURES,$PERSON_SERIAL)
    {
        date_default_timezone_set('Asia/Gaza');
        $date = date("yy-m-d H:i");
        $curs = '';
        $params = array(
            array('name' => ':QUESTION1_IN', 'value' => $QUESTION1, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_TEMPERATURE_IN', 'value' => $QUESTION1_TEMPERATURE, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION1_TEMPERATURE_NUM_IN', 'value' => $QUESTION1_TEMPERATURE_NUM, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION2_COUGH_IN', 'value' => $QUESTION2_COUGH, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION3_THROAT_IN', 'value' => $QUESTION3_THROAT, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION4_SMELLING_TASTING_IN', 'value' => $QUESTION4_SMELLING_TASTING, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION5_OTHERS_IN', 'value' => $QUESTION5_OTHERS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION5_OTHERS_SYNDROME_IN', 'value' => $QUESTION5_OTHERS_SYNDROME, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION6_CONTACT_PERSONS_IN', 'value' => $QUESTION6_CONTACT_PERSONS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION7_CP_HAVE_SYNDROME_IN', 'value' => $QUESTION7_CP_HAVE_SYNDROME, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION8_SAFETY_INSTRUCTIONS_IN', 'value' => $QUESTION8_SAFETY_INSTRUCTIONS, 'type' => '', 'length' => -1),
            array('name' => ':QUESTION9_SAFETY_MEASURES_IN', 'value' => $QUESTION9_SAFETY_MEASURES, 'type' => '', 'length' =>-1),
            array('name' => ':PERSON_SERIAL_IN', 'value' => $PERSON_SERIAL, 'type' => '', 'length' => -1),
            array('name' => ':PATIENT_ID_IN', 'value' => $_SESSION["PATIENT_DOCUMENT_ID"], 'type' => '', 'length' => -1),
            array('name' => ':CREATED_BY_IN', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':CREATED_DATE_IN', 'value' => $date, 'type' => '', 'length' =>-1),
            array('name' => ':STATUS_OUT', 'value' => 'STATUS_OUT', 'type' => '', 'length' =>-1),
            array('name' => ':SERIAL_ID_OUT', 'value' => 'SERIAL_ID_OUT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'INSERT_CP_QUESTIONS_ANSWERS', $params);
          /* print_r($params);
          exit(); */
        /* print_r($res);
         exit(); */
        return $res;

    }

     public function INSERT_CP_QUESTIONS_ANSWER_DETAILS($serial_id,$contact_name)
    {
        $curs = '';
        $params = array(
            array('name' => ':CP_QUESTIONS_ANSWERS_ID_IN', 'value' => $serial_id, 'type' => '', 'length' => -1),
            array('name' => ':Q7_CP_HAVE_SYNDROME_TEXT_IN', 'value' => $contact_name, 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'INSERT_CP_QUESTIONS_ANSWER_DETAILS', $params);
        return $res;
    }
    
    
     public function SEARCH_CITIZEN($IN_ID,$IN_FNAME,$IN_SNAME,$IN_TNAME,$IN_LNAME)
    {
        $curs = '';
        $params = array(
            array('name' => ':IN_ID', 'value' => $IN_ID, 'type' => '', 'length' => -1),
            array('name' => ':IN_FNAME', 'value' => $IN_FNAME, 'type' => '', 'length' => -1),
            array('name' => ':IN_SNAME', 'value' => $IN_SNAME, 'type' => '', 'length' => -1),
            array('name' => ':IN_TNAME', 'value' => $IN_TNAME, 'type' => '', 'length' => -1),
            array('name' => ':IN_LNAME', 'value' => $IN_LNAME, 'type' => '', 'length' => -1),
            array('name' => ':PERSON_CURSOR', 'value' => 'PERSON_CURSOR', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('PERSON_PKG', 'SEARCH_CITIZEN_ID_PR', $params);
        return $res['PERSON_CURSOR'];

    }
    
          public function INSERT_COVID19_CONTACTED($P_CONTACTED_ID,$P_CONTACTED_NAME,$P_CONTACTED_MOBILE,$P_INFECTED_ID,$P_NEAREST_LOC,$P_IDENTIFICATION_TYPE,$P_PASSPORT_TYPE,$P_IDENTIFIER_ID,$P_IDENTIFIER_NAME)
    {
        $curs = '';
        $params = array(
            array('name' => ':P_CONTACTED_ID', 'value' =>  $P_CONTACTED_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_CONTACTED_NAME', 'value' => $P_CONTACTED_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_CONTACTED_MOBILE', 'value' => $P_CONTACTED_MOBILE, 'type' => '', 'length' => -1),
            array('name' => ':P_INFECTED_ID', 'value' => $P_INFECTED_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_NEAREST_LOC', 'value' => $P_NEAREST_LOC, 'type' => '', 'length' => -1),
            array('name' => ':P_IDENTIFICATION_TYPE', 'value' => $P_IDENTIFICATION_TYPE, 'type' => '', 'length' => -1),
            array('name' => ':P_PASSPORT_TYPE', 'value' => $P_PASSPORT_TYPE, 'type' => '', 'length' => -1),
            array('name' => ':P_IDENTIFIER_ID', 'value' => $P_IDENTIFIER_ID, 'type' => '', 'length' => -1),
            array('name' => ':P_IDENTIFIER_NAME', 'value' => $P_IDENTIFIER_NAME, 'type' => '', 'length' => -1),
            array('name' => ':P_INSERT_USER', 'value' => $_SESSION["my_ID"], 'type' => '', 'length' => -1),
            array('name' => ':RESULT_INSERT', 'value' => 'RESULT_INSERT', 'type' => '', 'length' => -1));
        $res = $this->dbconn->excuteProcedures('COVID19_PKG', 'INSERT_COVID19_CONTACTED_ISOLSYS', $params);
        return $res;

    }
    
       public function GET_ALL_VISIT_PATIENT($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME,$P_FROM_DATE,$P_TO_DATE,$P_COVID,$P_LOC_ID,$P_FROM_TEM_NUM,$P_TO_TEM_NUM,$P_FROM_BREATHE_NUM,$P_TO_BREATHE_NUM,$P_FROM_PULS_NUM,$P_TO_PULS_NUM)
    {
        $curs = '';
        $params = array(
              array('name' => ':P_DOCUMENT_ID', 'value' => $P_ID, 'type' => '', 'length' => -1),
              array('name' => ':P_FIRST_NAME', 'value' => $FIRST_NAME, 'type' => '', 'length' => -1),
              array('name' => ':P_SECOND_NAME', 'value' => $SECOND_NAME, 'type' => '', 'length' => -1),
              array('name' => ':P_THIRD_NAME', 'value' => $THIRD_NAME, 'type' => '', 'length' => -1),
              array('name' => ':P_LAST_NAME', 'value' => $LAST_NAME, 'type' => '', 'length' => -1),
              array('name' => ':P_RTC_CENTER_ID', 'value' => '', 'type' => '', 'length' => -1),
              array('name' => ':P_FROM_DATE', 'value' => $P_FROM_DATE, 'type' => '', 'length' => -1),
              array('name' => ':P_TO_DATE', 'value' => $P_TO_DATE, 'type' => '', 'length' => -1),
              array('name' => ':P_COVID', 'value' =>$P_COVID, 'type' => '', 'length' => -1),
              array('name' => ':P_LOC_ID', 'value' => $P_LOC_ID, 'type' => '', 'length' => -1),
              array('name' => ':P_FROM_TEM_NUM', 'value' => $P_FROM_TEM_NUM, 'type' => '', 'length' => -1),
              array('name' => ':P_TO_TEM_NUM', 'value' => $P_TO_TEM_NUM, 'type' => '', 'length' => -1),
              array('name' => ':P_FROM_BREATHE_NUM', 'value' => $P_FROM_BREATHE_NUM, 'type' => '', 'length' => -1),
              array('name' => ':P_TO_BREATHE_NUM', 'value' =>$P_TO_BREATHE_NUM, 'type' => '', 'length' => -1),
              array('name' => ':P_FROM_PULS_NUM', 'value' => $P_FROM_PULS_NUM, 'type' => '', 'length' => -1),
              array('name' => ':P_TO_PULS_NUM', 'value' =>$P_TO_PULS_NUM, 'type' => '', 'length' => -1),
              array('name' => ':ALL_VISIT_PATIENT', 'value' => 'ALL_VISIT_PATIENT', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'GET_ALL_VISIT_PATIENT_PR', $params);
//            print_r($params);
//                   exit();
           return $res['ALL_VISIT_PATIENT'];

    }
    
    
          public function GET_RECOMMEND_LIST_PR()
    {
        $curs = '';
        $params = array(
            array('name' => ':RECOMMEND_LIST', 'value' => 'RECOMMEND_LIST', 'type' => 'cur', 'length' => 100));
        $res = $this->dbconn->excuteProcedures('CORONA_FORMS_PKG', 'GET_RECOMMEND_LIST_PR', $params);
        return $res['RECOMMEND_LIST'];

    }



    // by saleh abuamonah end

   }

?>