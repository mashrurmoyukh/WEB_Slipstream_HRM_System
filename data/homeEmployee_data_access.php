<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php


function editPasswordToDb($user){
		$query = "UPDATE user SET password='$user[password]' WHERE user_id='$user[user_id]'";
		return executeNonQuery($query);
	}

	function getUserByIdFromDb($id){
		//$user_id="$id";
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

	function editUserToDb($user){
		$query = "UPDATE user SET job_title='$user[jobTitle]', sub_unit='$user[subUnit]',email='$user[email]',married='$user[married]',smoker='$user[smoker]',dob='$user[dob]',gender='$user[gender]' WHERE id='$user[id]'";
		return executeNonQuery($query);

	}

	function getUserByNameFromDb($name){
		//$user_id="$id";
		$query = "SELECT * FROM user WHERE name='$name'";  
		$result = executeQuery($query);	
		$user = null;
		if($result){
			$user = mysqli_fetch_assoc($result);
		}
		return $user;
	}


?>