<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 

function getAllTrainingTimeByNameFromDb($namel){


		$name=$namel;
		$query = "SELECT * FROM training WHERE participant='$name'";  
		$result = executeQuery($query);	
		$user_by_name = null;
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			$user_by_name[$i] = $row;
		}
	}
		return $user_by_name;
	}



 function getAllTrainingTimeFromDb(){
		$query = "SELECT * FROM training";  
		$result = executeQuery($query);	
		$trainingTime  = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$trainingTime[$i] = $row;				
			}
		}
		return 	$trainingTime ;
	}

?>	