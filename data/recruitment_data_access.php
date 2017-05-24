<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php 
	function getAllRequirementVacancyFromDb(){
		$query = "SELECT * FROM vacancies";  
		$result = executeQuery($query);	
		$vacancy = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$vacancy[$i] = $row;				
			}
		}
		return $vacancy;
	}

	function addVacancyToDb($vac){
		$vacancy=$vac['vacancy'];
		$jobTitle=$vac['jobTitle'];
		$hiringManager=$vac['hiringManager'];
		$status=$vac['status'];
		
		$query = "INSERT INTO vacancies(vacancy, job_title, hiring_manager, status) VALUES('".$vacancy."', '".$jobTitle."', '".$hiringManager."', '".$status."')";
		return executeNonQuery($query);
	}
?>