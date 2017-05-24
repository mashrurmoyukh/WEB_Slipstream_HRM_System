<?php require_once(APP_ROOT."/data/recruitment_data_access.php") ?>

<?php
	function getAllVacancy(){
		return getAllRequirementVacancyFromDb();
	}

	function addVacancy($vac){
		return addVacancyToDb($vac);
	}
?>