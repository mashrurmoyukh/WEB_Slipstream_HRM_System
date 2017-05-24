<?php require_once(APP_ROOT."/data/project_data_access.php") ?>


<?php

	function addProject($project){
		return addProjectToDb($project);
	}
	function getAllEmployeeTime(){
		return getAllEmployeeTimeFromDb();
	}

	function getAllProjectTime(){
		return getAllProjectTimeFromDb();
	}

    function deleteProject($id){
    	removeProjectFromDb($id);
    }

    function updateStatus($status){
    	return editStatusToDb($status);
    }
?>