<?php require_once(APP_ROOT."/data/user_data_access.php") ?>

<?php

	function addUser($user){
		return addUserToDb($user);
	}
	function getAllPerson(){
		return getAllPersonFromDb();
	}

    function deleteUser($id){
    	removeUserFromDb($id);
    }
    function getUserByName($key){
    	return getUserByNameFromDb($key);
    }
    function updateUser($user){
    	return editUserToDb($user);
        var_dump($user[email]);
    }
    function getUserById($id){
        return getUserByIdFromDb($id);
    }
	
	
?>