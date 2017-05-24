<?php require_once(APP_ROOT."/data/homeEmployee_data_access.php") ?>

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
     function updateUser($user){
        return editUserToDb($user);
    }
     function getUserByName($user){
        return getUserByNameFromDb($user);
    }



?>