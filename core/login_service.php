<?php require_once(APP_ROOT."/data/login_data_access.php") ?>

<?php
	function check_if_user_exists($login_info){
		return get_user_by_info($login_info);
	}
?>