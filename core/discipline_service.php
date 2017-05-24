<?php require_once(APP_ROOT."/data/discipline_data_access.php") ?>


<?php	
	function getAllDiscipline(){
		return getAllRequirementDisciplineFromDb();
	}

	function addDiscipline($discipline){
		return addDisciplineToDb($discipline);
	}

	function updateStatus($status){
    	return editStatusToDb($status);
    }
?>