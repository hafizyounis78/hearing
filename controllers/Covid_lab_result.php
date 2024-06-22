<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid_lab_result extends MY_Controller {

    public function __construct()
	{

		parent::__construct();
        $this->load->model('Monitor_model', "CORONA");
	}

// 	public $data;
function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "استعلام نتائج فحص المختبر المركزي (COVID-19)";
		$this->data['menu'] = "استعلام نتائج فحص المختبر المركزي (COVID-19)";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}

       public function  covid_lab_result_vw()
	{

 	}

    function GET_LAB_HISTORY()
	{
     extract($_POST);
     $res= $this->data['lab_history_data'] = $this->CORONA->GET_LAB_HISTORY($P_ID,$FIRST_NAME,$SECOND_NAME,$THIRD_NAME,$LAST_NAME);
     $i = 1;
if ($res == ''){
$html = $html . '<td colspan="5" ><h2>لم يتم العثور على سجلات خاصة برقم الهوية,قد يكون طلبكم تحت الفحص ,يرجى المحاولة فيما بعد <h2></td>';
        }else{
     foreach ($res as $row) {
         //if ($row['TEST_RESULT'] == 'Negative'){
       $html = $html . '<tr><td>' . $i . '</td>
				         	 <td>' . $row['PATIENT_ID'] . '</td>
				         	 <td>' . $row['PATIENT_NAME'] . '</td>
							 <td>' . $row['LAB_ORDER_ID'] . '</td>
                             <td>' . $row['REQUEST_DATE'] . '</td>
                             <td>' . $row['PUBLISH_DATE'] . '</td>
                             <td>' . $row['TEST_TYPE'] . '</td>';
                             if ($row['TEST_RESULT'] == 'Negative'){
                             $html = $html . '<td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">' . $row['TEST_RESULT'] . '</span></td>';
                               }else if ($row['TEST_RESULT'] == 'Positive'){
                             $html = $html . '<td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">' . $row['TEST_RESULT'] . '</span></td>';
                             }else{
                             $html = $html . '<td></td>';
                             }
                             $html = $html . '</tr>';
            $i++;
//}
         }
}
        $html = $html . '';
        echo $html;
 	}

}