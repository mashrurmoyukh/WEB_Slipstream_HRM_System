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

<?php include_once(APP_ROOT."/core/discipline_service.php"); ?>
<?php include_once(APP_ROOT."/core/user_service.php"); ?>

<?php
	switch ($view) {
		case 'show':
			$discipline = getAllDiscipline();
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/discipline_show.php");
			break;

		case 'add':
			$userList = getAllPerson();
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/discipline_add.php");
			break;

		case 'clear':
			$discipline_id=$_GET['discipline_id'];
			$staus="Progress Cleared";
			$status = array('discipline_id'=>$discipline_id,'status'=>$staus,);
			updateStatus($status);
			header("location:/Slipstream_HRM_System?admin_discipline_show");
			break;

		default:
			include_once(APP_ROOT."/app/error.php"); 
			break;
	}
?>