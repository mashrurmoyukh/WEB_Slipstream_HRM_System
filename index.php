<?php
	define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/Slipstream_HRM_System");

	$hasError=true;
	if(count($_GET) == 0){
		$hasError = false;
		$isDispatchedByFrontController=true;
		include_once(APP_ROOT."/app/controller/login_controller.php");
	}

	if(count($_GET)>0){
		$key = array_keys($_GET)[0]; //ex: admin_home
		
		$path = explode("_", $key);
		if(count($path)==3){
			$hasError = false;

			$type = $path[0]; //ex: admin
			$controller = $path[1]; //ex: home
			$view = $path[2]; //ex: show
			
			if ($type == "admin") {
				$isDispatchedByFrontController=true;
				include_once(APP_ROOT."/app/controller/admin/".$controller."_controller.php");	
			}
			else if ($type == "user") {
				$isDispatchedByFrontController=true;
				include_once(APP_ROOT."/app/controller/user/".$controller."_controller.php");	
			}			
		}
	}

	if($hasError){
		include_once(APP_ROOT."/app/error.php");
	}
?>