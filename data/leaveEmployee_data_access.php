<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 





	function getAllLeaveListFromDb($namel){


		$name=$namel;
		$query = "SELECT * FROM leave_list WHERE name='$name'";  
		$result = executeQuery($query);	
		$user_by_name = null;
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			$user_by_name[$i] = $row;
		}
	}
		return $user_by_name;
	}


	function addLeaveToDb($leave){
		$id=$leave['id'];
		$name=$leave['name'];
		$from=$leave['from'];
		$leaveType=$leave['leaveType'];
		$to=$leave['to'];
		$days=$leave['numberDays'];
		$query = "INSERT INTO leave_list(name, start, leave_type, end ,days,status) VALUES('".$name."', '".$from."', '".$leaveType."','".$to."',".$days.",'Pending')";
		return executeNonQuery($query);
	}


	

?>