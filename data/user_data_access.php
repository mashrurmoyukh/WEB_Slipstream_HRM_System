<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 
	function getAllPersonFromDb(){
		$query = "SELECT * FROM user  ORDER BY name ASC";  
		$result = executeQuery($query);	
		$userList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$userList[$i] = $row;				
			}
		}
		return $userList;
	}

	function getUserByNameFromDb($key){
		$query = "SELECT * FROM user WHERE  name like '$key%' ";  
		$result = executeQuery($query);	
		$user_by_name = null;
		if($result){
			$user_by_name = mysqli_fetch_assoc($result);
		}
		return $user_by_name;
	}


	function addUserToDb($user){
		$user_id=$user['user_id'];
		$name=$user['name'];
		$password=$user['password'];
		$email=$user['email'];
		$salary=$user['salary'];
		$user_type=$user['user_type'];
		$user_image=$user['user_image'];
		$query = "INSERT INTO user(user_id, name, password, email, user_type, user_image, salary) VALUES('".$user_id."', '".$name."', '".$password."','".$email."','".$user_type."','".$user_image."','".$salary."')";
		return executeNonQuery($query);
	}


	function editUserToDb($user){
		$query = "UPDATE user SET user_id='$user[user_id]', name='$user[name]',password='$user[password]',email='$user[email]',salary='$user[salary]',user_type='$user[user_type]',user_image='$user[user_image]' WHERE id=$user[id]";
		return executeNonQuery($query);
	}

	function getUserByIdFromDb($id){
		$query = "SELECT * FROM user WHERE id=$id";  
		$result = executeQuery($query);	
		$user = null;
		if($result){
			$user = mysqli_fetch_assoc($result);
		}
		return $user;
	}


	function removeUserFromDb($id){
		$query = "DELETE FROM user WHERE id=$id";
		return executeNonQuery($query);
	}
?>