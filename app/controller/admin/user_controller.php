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

<?php include_once(APP_ROOT."/core/user_service.php"); ?>

<?php
	switch ($view) {
		case "manage":
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			$userList = getAllPerson();
			include_once(APP_ROOT."/app/view/admin/user_manage.php");
			break;

		case 'add':
			include_once(APP_ROOT."/lib/validator.php");
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			include_once(APP_ROOT."/app/view/admin/user_add.php");
			break;

		case 'edit':
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$user = getUserById($id); //Getting the model for view
				if($user){
					include_once(APP_ROOT."/app/view/admin/header.php");
					include_once(APP_ROOT."/app/view/admin/menu.php");
					include_once(APP_ROOT."/lib/validator.php");
					include_once(APP_ROOT."/app/view/admin/user_edit.php");				
				}
			}
			break;

		case 'delete':
			$id = $_GET['id'];
			deleteUser($id);
			include_once(APP_ROOT."/app/view/admin/header.php");
			include_once(APP_ROOT."/app/view/admin/menu.php");
			$userList = getAllPerson();
			if(count($userList)>0){
				
				include_once(APP_ROOT."/app/view/admin/user_manage.php");
			}
			break;

		default:
			include_once(APP_ROOT."/app/error.php");  
	}
?>