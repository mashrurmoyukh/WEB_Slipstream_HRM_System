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

<?php
	switch ($view) {
		case 'organization':
			include_once(APP_ROOT."/lib/validator.php");
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/organization_info.php");
			break;

		default:
			include_once(APP_ROOT."/app/error.php");  
	}
?>