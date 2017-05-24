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
<?php include_once(APP_ROOT."/core/home_service.php"); ?>
<?php
	switch ($view) {
		case "show":
		include_once(APP_ROOT."/app/view/admin/header.php");
		include_once(APP_ROOT."/app/view/admin/menu.php");
		if(isset($_SESSION['name'])){
				$name = $_SESSION['name'];
				$userList = getUserByName($name);
				if($userList){
			
			include_once(APP_ROOT."/app/view/admin/home.php");
			}
			}

			break;
		case "logout":
			session_unset(); 
			session_destroy(); 
			setcookie("user_id", "destroy", time()-100);
			setcookie("name", "destroy", time()-100);
			setcookie("user_type", "destroy", time()-100);
			header("location:/Slipstream_HRM_System/index.php");
			break;

			case "password":
			
			if(isset($_GET['user_id'])){
				

				include_once(APP_ROOT."/app/view/admin/header.php");
				include_once(APP_ROOT."/app/view/admin/menu.php");

				include_once(APP_ROOT."/app/view/admin/password.php");
			
		}

		break;
		case "profile":
		include_once(APP_ROOT."/app/view/admin/header.php");
		include_once(APP_ROOT."/app/view/admin/menu.php");
			if(isset($_GET['user_id'])){
				$id = $_GET['user_id'];
				$userList = getUserById($id);
				if($userList){
					
					
					include_once(APP_ROOT."/app/view/admin/profile.php");	
								
				}
			}
			break;
		default:
			include_once(APP_ROOT."/app/error.php");  
	}
?>