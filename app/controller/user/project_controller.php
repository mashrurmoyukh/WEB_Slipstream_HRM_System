<?php
	session_start();
	if(!isset($isDispatchedByFrontController)){
		include_once(APP_ROOT."/app/error.php");
		die();
	}
	if(isset($_COOKIE['user_ID'])){
		$_SESSION['user_ID'] = $_COOKIE['user_ID'];
		$_SESSION['name'] = $_COOKIE['name'];
		$_SESSION['user_type'] = $_COOKIE['user_type'];
	}
	if(!isset($_SESSION['user_id'])){
		header("location:/Slipstream_HRM_System");
	}
?>
<?php include_once(APP_ROOT."/core/timeEmployee_service.php"); ?>
<?php
	switch ($view) {
		case 'own':
			if(isset($_SESSION['name'])){
				$name = $_SESSION['name'];
				$projectTime= getAllProjectTimeByName($name);
				include_once(APP_ROOT."/app/view/user/header.php");
				include_once(APP_ROOT."/app/view/user/menu.php");
				include_once(APP_ROOT."/app/view/user/project_own.php");
			}
			break;

		case 'all':
			$projectTime = getAllProjectTime(); //Getting the model for view
			include_once(APP_ROOT."/app/view/user/header.php");
			include_once(APP_ROOT."/app/view/user/menu.php");
			include_once(APP_ROOT."/app/view/user/project_all.php");
			break;
		
		default:
			include_once(APP_ROOT."/app/error.php"); 
			break;
	}
?>