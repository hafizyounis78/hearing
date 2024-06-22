<?php

class Monitor_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Monitor_model', "CORONA");

	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "استعلام عام لمرضى الكورونا";
		$this->data['menu'] = "الاستعلام العام";
// 			$this->data['last_trans']=$this->PRM->GET_LAST_TRANS_DATA();
		//echo 'hi';print_r( $this->data['last_trans']);exit;
// 			$this->data['link'] = "index.php/patient_report_cont/patient_report";
	//	$this->$page();

		$this->load->view('templates/head', $this->data);
		//$this->load->view('templates/page_header');
		$this->load->view('templates/page_header_menu');
	//	$this->load->view('templates/container');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function monitor_vw()
	{
// 	    $this->data['GET_CORONA_DATA'] = $this->CORONA->GET_CORONA_DATA($P_ID,$P_PASSNO);
//         $this->data['GET_CORONA_DATA_SEARCH'] = $this->CORONA->GET_CORONA_DATA_SEARCH($P_ID,$P_PASSNO,$P_NAME,$P_CROSS,$P_CLASS,$P_CENTER,$P_QUAR_FROM_DATE,$P_QUAR_TO_DATE,$P_QUAR_IN_DATE,$P_QUAR_OUT_DATE,$P_QUAR_EXPECT_DATE,$P_SEX);
        $this->data['GET_QUARA_CLASS'] = $this->CORONA->GET_QUARA_CLASS();
        $this->data['GET_QUARA_CENTER'] = $this->CORONA->GET_QUARA_CENTER();
        $this->data['GET_TYPE_OF_MOVE'] = $this->CORONA->GET_TYPE_OF_MOVE();

	}
    public function corona_data_search()
	{
        extract($_POST);
        $res = $this->CORONA->GET_CORONA_DATA_SEARCH($P_ID,$P_PASSNO,$P_NAME,$P_CROSS,$P_CLASS,$P_CENTER,$P_QUAR_FROM_DATE,$P_QUAR_TO_DATE,$P_QUAR_IN_DATE,$P_QUAR_OUT_DATE,$P_QUAR_EXPECT_DATE,$P_SEX,$P_SHOW,$P_TEST_RESULT);
        $i = 1;
        foreach ($res as $row) {
            $originalDate = $row['FIRSTDT'] ;
         $newFIRSTDT = date("d/m/yy", strtotime($originalDate));
               $originalDate = $row['LASTDT'] ;
         $newLASTDT = date("d/m/yy", strtotime($originalDate));
            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td id="name">' . (isset($row['PCID'])? $row['PCID']:$row['P_PASS_NO'] ) . '</td>
							 <td>' . $row['PNAME'] . '</td>
                              <td>' . $row['PMOBILE'] . '</td>
							 <td>' .  $row['PCENTER_DESC'] . '</td>
                             <td>' . $row['PCLASS_DESC'] . '</td>
                             <td>' . $row['PQU_IN_DT'] . '</td>';
                             $html .= '<td>';
            if ($row['FIRSTDT'] != "" || $row['FTEST'] != "") {
            $html =$html .'
                             ' . $newFIRSTDT . ' ';
                 }

            $html .= '<td>';
            if ($row['CO'] > 1 && $row['FIRSTDT'] != $row['LASTDT']  ) {
            $html =$html .'
                             ' . $newLASTDT . ' ';
                 }
            $html .= '</td>';
            $html =$html .'
                             <td>' . $row['PQU_EXPECT_OUT_DT'] . '</td>
                             <td>' . $row['CO'] . '</td>
                             <td width="14%" class="text-center"> <button type="button" onClick="GET_MOVE_HISTORY('. (isset($row['PCID'])? $row['PCID']:'null' ). ','. (isset($row['P_PASS_NO'])? $row['P_PASS_NO']:'null' ). ')" class="btn btn-primary btn-sm"> الحركات</button>
                                   <button type="button" onClick="GET_LAB_HISTORY(' . $row['PCID'] . ')" class="btn btn-primary btn-sm get_name"> الفحوصات</button>';
                              '</td>
                           	';
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}
    
     public function corona_move_data()
	{
        extract($_POST);
        $res = $this->CORONA->GET_CORONA_MOVE_DATA($M_DATE,$M_STATUS_CD,$M_P_ID);
        $i = 1;
        foreach ($res as $row) {
            $originalDate = $row['MOVE_DT'] ;
         $newDate = date("d/m/yy", strtotime($originalDate));
            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td id="name">' . $row['ID'] . '</td>
							 <td>' . $row['P_NAME'] . '</td>
                             <td>' . $row['PCLASS_DESC'] . '</td>
                              <td>' . $newDate . '</td>
							 <td>' .  $row['MOVE_STATUS_DESC'] . '</td>
                             <td>' . $row['MOVE_CENTER_DESC'] . '</td>
                              <td>' . $row['FLOOR_NO'] . '</td>
                             <td>' . $row['ROOM_NO'] . '</td>';
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}


    function GET_LAB_HISTORY()
	{
     extract($_POST);
//      echo $PCID;
//         exit;
     $res= $this->data['lab_history_data'] = $this->CORONA->GET_LAB_HISTORY($PCID);
     $i = 1;
     foreach ($res as $row) {
            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td>' . $row['PATIENT_ID'] . '</td>
							 <td>' . $row['LAB_ORDER_ID'] . '</td>
							 <td>' . $row['REQUEST_DATE'] . '</td>';
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;
 	}

        function GET_MOVE_HISTORY()
	{
     extract($_POST);
//      echo $PCID;
//         exit;
     $res= $this->data['lab_history_data'] = $this->CORONA->GET_MOVE_HISTORY($PCID,$P_PASS_NO);
//             echo $P_PASS_NO;
//             exit;
     $i = 1;
     foreach ($res as $row) {
         $originalDate = $row['MOVE_DT'] ;
         $newDate = date("d/m/yy", strtotime($originalDate));
            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td>' . (isset($row['ID'])? $row['ID']:$row['PASSPORT_NO'] ) . '</td>
                              <td>' . $row['MOVE_STATUS_DESC'] . '</td>
                               <td>' . $row['MOVE_CENTER_DESC'] . '</td>
							 <td>' . $row['FLOOR_NO'] . '</td>
                              <td>' . $row['ROOM_NO'] . '</td>
							 <td>' . $newDate . '</td>';
                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;
 	}
}

?>
