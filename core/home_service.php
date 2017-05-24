<?php require_once(APP_ROOT."/data/home_data_access.php") ?>


<?php

	
    function updatePassword($user){
    	return editPasswordToDb($user);
    }
    function getUserById($id){
        return getUserByIdFromDb($id);
    }
	
	function getAllPerson(){
		return getAllPersonFromDb();
	}
    function getUserByName($name){
        return getUserByNameFromDb($name);
    }
    
?>