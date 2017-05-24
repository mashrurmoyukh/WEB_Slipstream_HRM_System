<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 


	function getAllDisciplineFromDb($name){

		//name=$name;
		$query = "SELECT * FROM discipline WHERE employee_name='$name'";  
		$result = executeQuery($query);	
		$user_by_name = null;
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
			$user_by_name[$i] = $row;
		}
	}
		return $user_by_name;
	}




	

?>