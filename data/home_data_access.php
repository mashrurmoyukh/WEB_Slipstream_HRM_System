<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php

function editPasswordToDb($user){
		$query = "UPDATE user SET password='$user[password]' WHERE user_id='$user[user_id]'";
		return executeNonQuery($query);
	}

	function getUserByIdFromDb($id){
		$query = "SELECT * FROM user WHERE user_id='$id'";  
		$result = executeQuery($query);	
		$user = null;
		if($result){
			$user = mysqli_fetch_assoc($result);
		}
		return $user;
	}

	function getAllPersonFromDb(){
		$query = "SELECT * FROM user";  
		$result = executeQuery($query);	
		$userList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$userList[$i] = $row;				
			}
		}
		return $userList;
	}
	function getUserByNameFromDb($name){
		$query = "SELECT * FROM user WHERE name='$name'";  
		$result = executeQuery($query);	
		$user = null;
		if($result){
			$user = mysqli_fetch_assoc($result);
		}
		return $user;
	}






	?>