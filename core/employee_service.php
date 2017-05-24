<?php require_once(APP_ROOT."/data/employee_data_access.php") ?>

<?php

	/*function addUser($user){
		return addUserToDb($user);
	}*/
	function getAllEmployee(){
		return getAllEmployeeFromDb();
	}

    /*function deleteUser($id){
    	removeUserFromDb($id);
    }
    function getUserByName($key){
    	return getUserByNameFromDb($key);
    }*/
    function updateEmployee($user){
    	return editEmployeeToDb($user);
        
    }
   /* function getUserById($id){
        return getUserByIdFromDb($id);
    }*/
	
	
?>