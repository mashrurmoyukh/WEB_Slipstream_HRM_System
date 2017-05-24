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

<?php include_once(APP_ROOT."/core/leave_service.php"); ?>

<?php
	switch ($view) {
		case 'show':
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			$leaveList = getAllLeaveList(); //Getting the model for view
			include_once(APP_ROOT."/app/view/admin/leave_show.php");
			break;
		
		case 'asign':
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			$leaveList = getAllPendingLeaveList(); //Getting the model for view	
			include_once(APP_ROOT."/app/view/admin/leave_asign.php");
			break;

		case 'reject':
			$status = "REJECT";
			$employee_id = $_GET['employee_id'];
			$leave = array('employee_id'=> $employee_id, 'status' => $status,);
			asignLeave($leave);
			header("location:/Slipstream_HRM_System?admin_leave_asign");
			break;

		case 'approve':
			$status = "APPROVE";
			$employee_id = $_GET['employee_id'];
			$leave = array('employee_id'=> $employee_id, 'status' => $status,);
			asignLeave($leave);
			header("location:/Slipstream_HRM_System?admin_leave_asign");
			break;

		default:
			include_once(APP_ROOT."/app/error.php"); 
			break;
	}
?>