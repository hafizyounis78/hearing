<?php
error_reporting( E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING );
class Logout_cont extends MY_Controller 
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	
    }
    
	function view ( $page = 'home')
	{
		if( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		// echo $page;
			$this->data['title'] = '';
	        $this->data['menu'] = '';
			$this->$page();
 			
		//	$this->load->view('pages/'.$page);
        $this->load->view('pages/logout_view');
			
	}
  
    public function logout_view()
	{
        
//         $this->_kill_session();

 		/*session_start();
		$sp =$_SESSION["ref_link"];
      	unset($_SESSION);
 		session_destroy();	 	
				if (base_url()=="http://apps.moh.gov.ps/ehos/")
					$sysLink="http://apps.moh.gov.ps";
				else
				    $sysLink="http://10.20.10.254";

				  
					
 		                   if($sp == "perm")
						      $link = $sysLink."/perm/index.php/Login/main_page";
							  else
							  $link = $sysLink."/per/index.php/login/main_page";

				redirect($link, "location");*/

		 session_start();
 	     unset($_SESSION["USER_AND_PRIV_77"]); 
		 unset($_SESSION["USER_AND_PRIV_H"]);
         $this->session->unset_userdata('USER_ID');
		 session_destroy();
				if (base_url()=="http://apps.moh.gov.ps/hearing_screening/")
					$sysLink="http://apps.moh.gov.ps";
				else
				    $sysLink="http://10.20.10.254";
				
			      $link = $sysLink;
  				  redirect($link, "location");
  	}
    
	
}
?>