<?php require_once(APP_ROOT."/data/leaveEmployee_data_access.php") ?>


<?php

	
    function addLeave($leave){
    	return addLeaveToDb($leave);
    }
  
	
	function getAllLeaveListByName($name){
		return  getAllLeaveListFromDb($name);
	}
?>