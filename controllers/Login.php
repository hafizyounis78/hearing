<?php  defined('BASEPATH') OR exit('No direct script access allowed');
 class Login extends MY_Controller {
	
	public $db;
    public $CI;
    public $object;
	function __construct()
	{	
	 
      parent::__construct();
   //   $this->load->library('dbconn'); 
       $this->load->helper('url');	
       	
	}
	
	public function index()
	{
	
     
	    
	}
	public function get($h,$s)
	{
	
	  session_start();
	 
    
		$homepage = file_get_contents('http://10.20.10.254/perm/index.php/Api/get_priv_byid/'.$h.'/'.$s.'/');		
		$users = json_decode($homepage,true); 
	
        $_SESSION["USER_AND_PRIV_".SYSTEM_KEY]=$users;

        
 			if(isset($_SERVER["HTTP_REFERER"])){

			 $sp = explode("/",$_SERVER["HTTP_REFERER"]);

			   if($sp[3] == "perm")

			   {
 				  if(!empty($_SESSION["USER_AND_PRIV_".SYSTEM_KEY]))  
				      $_SESSION["USER_AND_PRIV_TECH"] = $_SESSION["USER_AND_PRIV_".SYSTEM_KEY];

				  $_SESSION["ref_link"] = "perm";

				unset($_SESSION["USER_AND_PRIV"]);  

			   }

				else{
					
					if(!empty($_SESSION["USER_AND_PRIV"]))  
				      $_SESSION["USER_AND_PRIV_TECH"] = $_SESSION["USER_AND_PRIV"];

				  	unset($_SESSION["USER_AND_PRIV_".SYSTEM_KEY]);  

				}

			}
   
        //$_SESSION['PRIVS']=$_SESSION['USER_AND_PRIV_TECH']['PRIVS'];
 		$_SESSION['USER_CODE']=$_SESSION['USER_AND_PRIV_TECH']['USERS'][0]['USER_CODE'];
		$_SESSION['USER_NAME']=$_SESSION['USER_AND_PRIV_TECH']['USERS'][0]['USER_FULL_NAME'];
		$_SESSION['USER_ID']=$_SESSION['USER_AND_PRIV_TECH']['USERS'][0]['USER_ID'];
		$_SESSION['USER_EMAIL']=$_SESSION['USER_AND_PRIV_TECH']['USERS'][0]['USER_EMAIL'];
		$_SESSION['USER_MOBILE']=$_SESSION['USER_AND_PRIV_TECH']['USERS'][0]['USER_MOBILE'];
		
		$_SESSION['LOC_TYPE']=$_SESSION['USER_AND_PRIV_TECH']['PRIVS'][0]['LOC_TYPE'];
		$_SESSION['LOC_CD']=$_SESSION['USER_AND_PRIV_TECH']['PRIVS'][0]['LOC_CD'];
		$_SESSION['LOC_TREE_NAME']=$_SESSION['USER_AND_PRIV_TECH']['PRIVS'][0]['LOC_NAME'];
        $_SESSION["my_SYSID"] = $_SESSION['USER_AND_PRIV_TECH']['SYSTEM'];
				
		$_SESSION['notifications_count'] = 0;
		
       

  		for($i=0; $i < count($_SESSION['USER_AND_PRIV_TECH']['PRIVS']); $i++)
		{
		
		  if($_SESSION['USER_AND_PRIV_TECH']['PRIVS'][$i]['LOC_CD'] == $_SESSION['ACTIVE_LOC'])
			 
			$_SESSION["activ_LOCATIONS"] = $i;
		}
	
 		$_SESSION["my_USER_CODE"]=$_SESSION["USER_AND_PRIV_TECH"]['USERS'][0]['USER_CODE'];
		$_SESSION["my_USERNAME"]=$_SESSION["USER_AND_PRIV_TECH"]['USERS'][0]['USER_FULL_NAME'];
		$_SESSION["my_ID"]=$_SESSION["USER_AND_PRIV_TECH"]['USERS'][0]['USER_ID'];
		$_SESSION["my_activ_LOCATIONS"] = $_SESSION["USER_AND_PRIV_TECH"]['PRIVS'];	
	    $_SESSION["my_menu"]=$_SESSION["USER_AND_PRIV_TECH"]['PRIVS'][0]['menu'];
        $_SESSION["my_LOCATIONS"]=$_SESSION["my_activ_LOCATIONS"][0]['LOC_CD'];

 		 redirect('dashboard/dashboard_vw');
		} 
 }
 