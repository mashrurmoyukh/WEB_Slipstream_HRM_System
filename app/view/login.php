<?php
	if(isset($_COOKIE['user_id'])){
		if ($_COOKIE['user_type'] == "admin") {
			$_SESSION['user_id'] = $_COOKIE['user_id'];
			$_SESSION['name'] = $_COOKIE['name'];
			$_SESSION['user_type'] = $_COOKIE['user_type'];
			header("location:/Slipstream_HRM_System/?admin_home_show");
		}
		else{
			$_SESSION['user_id'] = $_COOKIE['user_id'];
			$_SESSION['name'] = $_COOKIE['name'];
			$_SESSION['user_type'] = $_COOKIE['user_type'];
			header("location:/Slipstream_HRM_System/?user_home_show");
		}
		
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="app/view/css/login.css">
</head>
<body>
	<div class="header">
		<div>Slipstream<span>HRM</span></div>
	</div>
	<div class="login-form">
		<form method = "post">
			<input type="text" placeholder="Username" name="username"/>
			<br/>
			<input type="password" placeholder="Password" name="password"/>
			<br/>
			<input type="checkbox" name="remember"> <span>Remember me</span>
			<br/>
			<input type="submit" value="Login">
			<p><font color="red" size="2" id="error_message"> </font></p>
		</form>
	</div>
</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$user_id = trim($_POST['username']);
		$password = trim($_POST['password']);
		$password = md5($password);

		if (!empty($user_id) && !empty($password)) {
			$login_info = array("user_id"=>$user_id,"password"=>$password);
			$data = check_if_user_exists($login_info);

			if(mysqli_num_rows($data) == 1){
				while ($row = mysqli_fetch_assoc($data)){
					if (!empty($row['user_id'])) {
						if ($row['user_type'] == "admin") {
							if (isset($_POST['remember'])) {
								setcookie("user_id", $user_id, time() + (86400 * 30));
								setcookie("name", $row['name'], time() + (86400 * 30));
								setcookie("user_type", $row['user_type'], time() + (86400 * 30));
							}
							$_SESSION['user_id'] = $row['user_id'];
							$_SESSION['name'] = $row['name'];
							$_SESSION['user_type'] = $row['user_type'];
							header("Location:/Slipstream_HRM_System/?admin_home_show");
						}
						else{
							if (isset($_POST['remember'])) {
								setcookie("user_id", $user_id, time() + (86400 * 30));
								setcookie("name", $row['name'], time() + (86400 * 30));
								setcookie("user_type", $row['user_type'], time() + (86400 * 30));
							}
							$_SESSION['user_id'] = $row['user_id'];
							$_SESSION['name'] = $row['name'];
							$_SESSION['user_type'] = $row['user_type'];
							header("Location:/Slipstream_HRM_System/?user_home_show");
						}
					}
				}
			}
			else{
				$error_message = "Username and Password doesn\'t matched";
				echo"
				<script> document.getElementById('error_message').innerHTML='".$error_message."'; </script>";
			}
		}
		else{
			$error_message = "Username and Password can\'t be empty";
			echo"
			<script> document.getElementById('error_message').innerHTML='".$error_message."'; </script>";
		}
	}
?>