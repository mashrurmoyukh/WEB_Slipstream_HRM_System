<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>


<?php function getAllLeaveListFromDb(){
		$query = "SELECT * FROM leave_list ";  
		$result = executeQuery($query);	
		$leaveList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$leaveList[$i] = $row;				
			}
		}
		return $leaveList;
	}

	function getAllPendingLeaveListFromDb(){
		$query = "SELECT * FROM leave_list WHERE status='Pending' ";  
		$result = executeQuery($query);	
		$leaveList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$leaveList[$i] = $row;				
			}
		}
		return $leaveList;
	}

	function asignLeaveToDB($leave){
		$query = "UPDATE leave_list SET status= '$leave[status]' WHERE employee_id = $leave[employee_id]";
		return executeNonQuery($query);
	}
?>	