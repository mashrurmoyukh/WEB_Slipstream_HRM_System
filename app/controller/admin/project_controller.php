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

<?php include_once(APP_ROOT."/core/project_service.php"); ?>
<?php include_once(APP_ROOT."/core/user_service.php"); ?>

<?php
	switch ($view) {
		case 'show':
			$projectTime = getAllProjectTime(); //Getting the model for view
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/project_show.php");
			break;

		case 'add':
			$userList = getAllPerson();
			include_once(APP_ROOT."/lib/validator.php");
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/project_add.php");
			break;

		case 'complete':
			$project_id=$_GET['project_id'];
			$staus="COMPLETED";
			$status = array('project_id'=>$project_id,'status'=>$staus,);
			updateStatus($status);
			header("location:/Slipstream_HRM_System?admin_project_show");
			break;

		case 'delete':
			$project_id=$_GET['project_id'];
			deleteProject($project_id);
			header("location:/Slipstream_HRM_System?admin_project_show");
			break;
		
		default:
			include_once(APP_ROOT."/app/error.php"); 
			break;
	}
?>