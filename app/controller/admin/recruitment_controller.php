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

<?php include_once(APP_ROOT."/core/recruitment_service.php"); ?>
<?php include_once(APP_ROOT."/core/user_service.php"); ?>

<?php
	switch ($view) {
		case 'show':
			$vacancy = getAllVacancy();
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/recruitment_show.php");
			break;

		case 'add':
			$userList = getAllPerson();
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/recruitment_add.php");
			break;
			
		default:
			include_once(APP_ROOT."/app/error.php"); 
			break;
	}
?>