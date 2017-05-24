<?php	
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "slipstream_hrm_system";
	
	function executeNonQuery($query){
		global $serverName, $userName, $password, $dbName;
		$result = false;
		$connection = mysqli_connect($serverName, $userName, "", $dbName);		
		if($connection){
			$result = mysqli_query($connection, $query);
			mysqli_close($connection);
		}
		return $result;
	}
	
	function executeQuery($query){
		return executeNonQuery($query);	
	}
?>