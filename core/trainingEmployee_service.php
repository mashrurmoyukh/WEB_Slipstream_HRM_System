<?php require_once(APP_ROOT."/data/trainingEmployee_data_access.php") ?>


<?php

	

	function getAllTrainingTime(){
		return getAllTrainingTimeFromDb();
	}

   
    function getAllTrainingTimeByName($name){
    	return getAllTrainingTimeByNameFromDb($name);
    }
    
	
?>