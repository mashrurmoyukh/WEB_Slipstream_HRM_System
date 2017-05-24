<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>

<?php
	function get_user_by_info($login_info){
		$query ="SELECT * FROM user WHERE user_id='$login_info[user_id]' AND password='$login_info[password]'";
		return executeNonQuery($query);
	}
?>