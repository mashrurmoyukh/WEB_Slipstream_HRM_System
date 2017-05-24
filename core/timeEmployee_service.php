<?php require_once(APP_ROOT."/data/timeEmployee_data_access.php") ?>


<?php

	/*function addUser($user){
		return addUserToDb($user);
	}*/
	/*function getAllEmployeeTime(){
		return getAllEmployeeTimeFromDb();
	}*/

	function getAllProjectTime(){
		return getAllProjectTimeFromDb();
	}

   /* function deleteEmployee($id){
    	removeEmployeeFromDb($id);
    }*/
    function getAllProjectTimeByName($name){
    	return getAllProjectTimeByNameFromDb($name);
    }
    /*function updateEmployee($employee){
    	return editEmployeeToDb($employee);
    }
	*/
	
?>