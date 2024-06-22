<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');

	}

	function view ( $page = 'home')
	{

		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$this->$page();

		$this->data['title'] = "قائمة المستخدمين";
		$this->data['menu'] = "قائمة المستخدمين";
		$this->load->view('templates/head', $this->data);
		$this->load->view('templates/page_header_menu');
		$this->load->view('pages/'. $page , $this->data);
		$this->load->view('templates/footer');

	}


	public function userlist_vw()
	{
        $this->data['GET_USER_LIST'] = $this->User_model->GET_USER_LIST_DATA();
        $this->data['GET_C_RTC_CENTER_PR'] = $this->User_model->GET_C_RTC_CENTER_PR();
        $this->data['GET_C_RTC_TITLE_PR'] = $this->User_model->GET_C_RTC_TITLE_PR();
        $this->data['GET_USER_LOC_PR'] = $this->User_model->GET_USER_LOC_PR();


	}

    	public function userinsert_vw()
	{
        $this->data['title'] = "إضافة مستخدم جديد";
		$this->data['menu'] = "إضافة مستخدم جديد";
        $this->data['GET_C_RTC_CENTER_PR'] = $this->User_model->GET_C_RTC_CENTER_PR();
        $this->data['GET_C_RTC_TITLE_PR'] = $this->User_model->GET_C_RTC_TITLE_PR();
        $this->data['GET_USER_LOC_PR'] = $this->User_model->GET_USER_LOC_PR();

	}


     public function USER_LIST_DATA()
	{
        extract($_POST);
        $res = $this->User_model->GET_USER_LIST_DATA();
        $i = 1;
        foreach ($res as $row) {
            $html = $html . '<tr><td>' . $i . '</td>
				         	 <td id="name">' . $row['RTC_USER_ID'] . '</td>
							 <td>' . $row['EMP_NAME'] . '</td>
                              <td>' . $row['EMP_NUM'] . '</td>
							 <td>' .  $row['TITLE_DESC'] . '</td>
                             <td>' .  $row['RTC_CENTER_NAME_AR'] . '</td>
                             <td>' .  $row['LOC_NAME_AR'] . '</td>
                             <td class="text-center"><button type="button" onClick="GET_USER_DETAILS(' . $row['RTC_USER_ID'] . ')" class="btn btn-sm btn-brand btn-elevate">  <i class="la la-edit"></i> تعديل</button></td>';


                             $html = $html . '</tr>';
            $i++;
        }
        $html = $html . '';
        echo $html;

	}
    
    
     public function RTC_USER_INSERT()
	{
        extract($_POST);
        $result = $this->User_model->RTC_USER_INSERT($P_RTC_USER_ID,$P_EMP_NAME,$P_RTC_CENTER_ID,$P_TITLE_ID,$P_EMP_NUM,$P_USER_LOC_ID);
          /*  echo $result['PR_RESULT'];
        exit; */

          	if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
       else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}

      public function RTC_USER_UPDATE()
	{
        extract($_POST);
        $result = $this->User_model->RTC_USER_UPDATE($P_RTC_USER_ID,$P_EMP_NAME,$P_RTC_CENTER_ID,$P_TITLE_ID,$P_EMP_NUM,$P_USER_LOC_ID);
          /*  echo $result['PR_RESULT'];
        exit; */

          	if ($result['PR_RESULT'] == 1)
			echo json_encode(array('status' => true, 'message' => 'تمت العملية بنجاح' , 'type' => 'success' ));
       else
			echo json_encode(array('status' => false, 'message' => 'لم تتم العملية' , 'type' => 'danger'));
	}


         public function GET_USER_DETAILS()
	{
        extract($_POST);
        $result = $this->User_model->GET_USER_DETAILS($P_RTC_USER_ID);
        echo json_encode($result);
	}



    }
?>
