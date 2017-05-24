<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 

function getAllEmployeeFromDb(){
		$query = "SELECT * FROM user ORDER BY name ASC";  
		$result = executeQuery($query);	
		$EmployeeList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$EmployeeList[$i] = $row;				
			}
		}
		return $EmployeeList;
	}

	function editEmployeeToDb($user){
		$query = "UPDATE user SET job_title='$user[jobTitle]', sub_unit='$user[subUnit]',married='$user[married]',workshift='$user[workshift]',smoker='$user[smoker]',dob='$user[dob]',gender='$user[gender]' WHERE name='$user[name]'";
		return executeNonQuery($query);

	}
?>