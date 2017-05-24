<?php
	function validate_name($name) {
		if(empty($name)){
			return false;
		}
		else if(count(explode(' ',$name)) <2) {
			return false;
		}
		else if(!preg_match("/^[a-zA-Z \.\-]*$/",$name)) {
			return false;
		}
		else if(!preg_match("/^[a-zA-Z]*$/",$name[0])) {
			return false;
		}
		else {
			return true;
		}
	}

	function validate_email($email) {
		if(empty($email)) {
			return false;
		}
		if(count(explode('@',$email)) != 2) {
			return false;
		}
		else {
			$words = explode('@',$email);
			$second = $words[1];
			if(count(explode('.',$email)) != 2){
				return false;
			}
		}
		return true;
	}

	function validateDob($dd,$mm,$yyyy) {
		$isLeaf = false;
		if((($yyyy % 4) == 0) && ((($yyyy % 100) != 0) || (($yyyy %400) == 0))) {
			$isLeaf = true;
		}
		if($dd=='' or $mm=='' or $yyyy=='') {
			return false;
		}
		if(!is_numeric($dd) or !is_numeric($dd) or !is_numeric($dd)) {
			return false;
		}
		if($mm<0 or $mm>12) {
			return false;
		}
		if($yyyy<1900 or $yyyy>2016) {
			return false;
		}
		if($mm !=2) {
			if($dd<1 or $dd>31) {
				return false;
			}
		}
		if($mm == 2 and $isLeaf == true) {
			if($dd<1 or $dd>29) {
				return false;
			}
		}
		if($mm == 2 and $isLeaf == false) {
			if($dd<1 or $dd>28) {
				return false;
			}
		}
		return true;
	}
?>