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

<?php include_once(APP_ROOT."/core/employee_service.php"); ?>
<?php include_once(APP_ROOT."/core/user_service.php"); ?>

<?php
	switch ($view) {
		case 'show':
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			$EmployeeList = getAllEmployee(); //Getting the model for view
			if(count($EmployeeList)>0){
				include_once(APP_ROOT."/app/view/admin/employee_show.php");
			}
			break;

		case 'update':
			$userList = getAllPerson();
			include_once(APP_ROOT."/lib/validator.php");
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/employee_update.php");
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php");
	}
?>