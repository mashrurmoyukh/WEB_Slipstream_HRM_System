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
<?php include_once(APP_ROOT."/core/disciplineEmployee_service.php"); ?>
<?php
	switch ($view) {
		case 'show':
			include_once(APP_ROOT."/app/view/user/header.php");
			include_once(APP_ROOT."/app/view/user/menu.php");
			$name = $_SESSION['name'];
			$discipline= getAllDisciplineByName($name);
			include_once(APP_ROOT."/app/view/user/discipline_show.php");
		
			break;

		default:
			include_once(APP_ROOT."/app/error.php"); 
			break;
	}
?>