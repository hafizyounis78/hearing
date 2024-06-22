<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function view ( $page = 'dashrd_user')
	{
		error_reporting(0);
		if($this->session->userdata('USER_ID')!='')
		{
			$this->data['title'] = "نظام رصد حالات الكورونا الالكتروني";
			$this->data['menu']  = '->';
			$this->$page();
			$this->load->view('templates/header',$this->data);
			$this->load->view('templates/page_header');
			$this->load->view('templates/page_header_menu');
			//$this->load->view('templates/container');
			$this->load->view('pages/'.$page,$this->data);
			$this->load->view('templates/footer.php');
		}
		else
		{
			$HostName=$_SERVER["SERVER_NAME"];
			redirect("http://$HostName/perm/index.php/Login", "location");
		}
	}

}
