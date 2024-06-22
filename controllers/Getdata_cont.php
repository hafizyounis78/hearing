<?php

class Getdata_cont extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Doctor_model');
	}


    public function GET_ICD_NAME()
	{

      /*  $ICD_NAME = $this->input->get('ICD_NAME'); */
        extract($_POST);
        $result = $this->Doctor_model->GET_ICD_NAME($q);
        echo json_encode($result);
	}
    
    public function GET_ICD_CODE()
	{

      /*  $ICD_NAME = $this->input->get('ICD_NAME'); */
        extract($_POST);
        $result = $this->Doctor_model->GET_ICD_CODE($q);
        echo json_encode($result);
	}
    


    }
?>
