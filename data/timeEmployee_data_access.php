<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 

function getAllProjectTimeByNameFromDb($namel){


		$name=$namel;
		$query = "SELECT * FROM projects_time WHERE employee='$name'";  
		$result = executeQuery($query);	
		$user_by_name = null;
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			$user_by_name[$i] = $row;
		}
	}
		return $user_by_name;
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

?>	