<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 
	function getAllEmployeeTimeFromDb(){
		$query = "SELECT * FROM employee_time";  
		$result = executeQuery($query);	
		$employeeTime = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$employeeTime[$i] = $row;				
			}
		}
		return $employeeTime;
	}


	function getAllProjectTimeFromDb(){
		$query = "SELECT * FROM projects_time";  
		$result = executeQuery($query);	
		$projectTime  = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$projectTime[$i] = $row;				
			}
		}
		return 	$projectTime ;
	}

	function addProjectToDb($project){
		$name=$project['name'];
		$employee=$project['employee'];
		$startTime=$project['startTime'];
		$endTime=$project['endTime'];
		$admin=$project['admin'];

		$query = "INSERT INTO projects_time(name, employee, start_time, end_time, admin, status) VALUES('".$name."', '".$employee."', '".$startTime."', '".$endTime."', '".$admin."', 'OnGoing')";
		return executeNonQuery($query);
	}

	function editStatusToDb($status){
		$query = "UPDATE projects_time SET status='$status[status]' WHERE project_id=$status[project_id]";
		return executeNonQuery($query);
	}

	function removeProjectFromDb($id){
		$query = "DELETE FROM projects_time WHERE project_id=$id";
		return executeNonQuery($query);
	}
?>	