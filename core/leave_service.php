<?php require_once(APP_ROOT."/data/leave_data_access.php") ?>

<?php
	function getAllLeaveList(){
		return getAllLeaveListFromDb();
	}

	function getAllPendingLeaveList(){
		return getAllPendingLeaveListFromDb();
	}

	function asignLeave($leave){
		return asignLeaveToDB($leave);
	}
?>