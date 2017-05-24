<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 
	function getAllRequirementDisciplineFromDb(){
		$query = "SELECT * FROM discipline WHERE Status = 'On Progress'";  
		$result = executeQuery($query);	
		$discipline = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$discipline[$i] = $row;				
			}
		}
		return $discipline;
	}

	function addDisciplineToDb($discipline){
		$case=$discipline['case'];
		$employee=$discipline['employee'];
		$penalty=$discipline['penalty'];

		$query = "INSERT INTO discipline(employee_name, case_name, penalty) VALUES('".$employee."', '".$case."', '".$penalty."')";
		return executeNonQuery($query);
	}

	function editStatusToDb($status){
		$query = "UPDATE discipline SET Status='$status[status]' WHERE discipline_id=$status[discipline_id]";
		return executeNonQuery($query);
	}
?>