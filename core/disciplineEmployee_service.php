<?php require_once(APP_ROOT."/data/disciplineEmployee_data_access.php") ?>


<?php

	
	function getAllDisciplineByName($name){
		return  getAllDisciplineFromDb($name);
	}
?>