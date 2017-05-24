<?php
	$error_name = "";
	$error_jobTitle="";
	$error_subUnit="";
	$error_married = "";
	$error_workshift = "";
  	$error_smoker="";
  	$error_dob="";
  	$error_gender="";

	$jobTitle="";
	$subUnit="";
	$name = "";
	$workshift = "";
  	$gender="";
  	$smoker="";
  	$married="";
  	$dob="";
  	

  	$error_count = 0;

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$jobTitle = trim($_POST['jobTitle']);
		$subUnit = trim($_POST['subUnit']);
		$name = trim($_POST['name']);
		$workshift = trim($_POST['workshift']);
		$gender = trim($_POST['gender']);
   
    	$married = trim($_POST['married']);
    	$smoker = trim($_POST['smoker']);
    	 $dob=$_POST['dob'];
    	if($jobTitle == ""){
    		$error_jobTitle = "Job Title can't be empty";
            $error_count++;
      	}

      	if($subUnit == ""){
            $error_subUnit = "Sub Unit can't be empty";
            $error_count++;
      	}
      	if($dob == ""){
         $error_dob = "Not a valid date.";
         $error_count++;
      }

      	if($name == ""){
	        $error_name = "Name can't be empty";
	        $error_count++;
      	}

       	if($workshift == ""){
            $error_workshift = "Workshift can't be empty";
            $error_count++;
      	}

       	if($gender == ""){
            $error_gender = "Gender can't be empty";
            $error_count++;
      	}

       	

      	if($married == ""){
            $error_married = "Maritial Status can't be empty";
            $error_count++;
      	}

      	if($smoker == ""){
            $error_smoker = "Smoker section can't be empty";
            $error_count++;
  		}

      //IMAGE ADD VALIDATION FOR PHP

       	if($error_count == 0){

	       	$user = array(
	      				'name' => $name,
	      				'jobTitle' => $jobTitle,
	      				'subUnit' => $subUnit,
	              		'workshift' => $workshift,
	      				'smoker' => $smoker,
	              		'married' => $married,
	              		 'dob' => $dob,
	              		'gender' => $gender,	
					);
	       	if(updateEmployee($user)) {
	       		$success=1;
	       	}
  	 	}
  	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Bulk Update</title>
	<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/edit.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script >
   $(document).ready(function() {
    $("#datepicker").datepicker();

  });
   
</script>
</head>
<body bgcolor="#e3e4e5">
	<div>
		<center>
		<form method="post"   onsubmit="return validateForm()" name="myForm">  
				<?php if(isset($success)) : ?>
					<div class="success" style="color:white">
						Successfully added new employee!!!!
					</div>
				<?php endif; ?>
				<table  style="margin-bottom: 100px;" align="center" class="edittable" style="width: 100%">
					<tr align="center">
						<td colspan="2" style="text-align: center">
							<font size="6">	Bulk Update </font>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">Employee Name </font>
						</td>
						<td>
							<select name="name">
			  					<option value="">Select Employee Name</option>
			                  	<?php foreach($userList as $user):?>
			                      <option value="<?= $user['name']; ?>"><?= $user['name']; ?></option>
			                   	<?php endforeach; ?>
			                   	<br/><span class="error"><?php echo $error_name; ?></span>
			                </select>
						</td>
					</tr>

					<tr align="center">
						<td>
							<font size="4"> Job Title </font>
						</td>
						<td>
							<select name="jobTitle" >
								<option value="">Please Select Role</option>
								<option value="HR ADMIN">HR ADMIN</option>
								<option value="IT MANAGER">IT MANAGER</option>
								<option value="QA ENGINEER">QA ENGINEER</option>
								<option value="SALES EXECUTIVE">SALES EXECUTIVE</option>
								<option value="SOFTWARE ENGINEER">SOFTWARE ENGINEER</option>
							</select>
							<br/><span class="error"><?php echo $error_jobTitle; ?></span>
						</td>
					</tr>

					<tr align="center">
						<td>
							<font size="4">	Sub Unit </font>
						</td>
						<td>
							<select name="subUnit" >
								<option value="">Please Select Role</option>
								<option value="IT">IT</option>
								<option value="Administration">Administration</option>
								<option value="Sales">Sales</option>
								<option value="Marketing">Marketing</option>
								<option value="Finance">Finance</option>
								<option value="Production">Production</option>

							</select>
							<br/><span class="error"><?php echo $error_subUnit; ?></span>
						</td>
					</tr>

					<tr align="center">
						<td>
							<font size="4"> Maritial Status </font>
						</td>
						<td>
							<select name="married" >
								<option value="">Please Select Role</option>
								<option value="Single">Single</option>
								<option value="Married">Married</option>

							</select>
							<br/><span class="error"><?php echo $error_married; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4"> Work Shift </font>
						</td>
						<td>
							<select name="workshift" >
								<option value="">Please Select Role</option>
								<option value="Day">Day</option>
								<option value="Twilight">Twilight</option>

							</select>
							<br/><span class="error"><?php echo $error_workshift; ?></span>
						</td>
					</tr>

					<tr align="center">
						<td>
							<font size="4"> Smoker </font>
						</td>
						<td>
							<select name="smoker" >
								<option value="">Please Select Role</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>

							</select>
							<br/><span class="error"><?php echo $error_smoker; ?></span>
						</td>
					</tr>

					 <tr align="center">
               <td>
                  <font size="4"> Date Of Birth </font>
               </td>
               <td>
                  <input type="text" id="datepicker" value="<?= $dob; ?>" name="dob" size=45/><br/><span class="error"><?php echo $error_dob; ?></span>
               </td>
            </tr>
					<tr align="center">
						<td>
							<font size="4"> Gender </font>
						</td>
						<td>
							<select name="gender" >
								<option value="">Please Select Role</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>

							</select>
							<br/><span class="error"><?php echo $error_gender; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td colspan="2" align="right" style="text-align: right">
							<button type="submit"  class="button"  name="submit">Bulk Update</button>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>

<!--  -->
<!-- Validation with JAVA SCRIPT -->
<!--  -->

<script type="text/javascript">
	function validateForm(){
	  	var name = document.forms["myForm"]["name"].value;
	   	if(name==""){
	    	window.alert("Problem with Name! Please correct");
	      	return false;
	   	}
	   
	    var jobTitle = document.forms["myForm"]["jobTitle"].value;
	   	if(jobTitle==""){
	    	alert("Job Title can't be empty");
	      	return false;
	   	}

	    var subUnit = document.forms["myForm"]["subUnit"].value;
	   	if(subUnit==""){
	   		window.alert("Sub Unit can't be empty");
	      	return false;
	   	}
	   	var married = document.forms["myForm"]["married"].value;
	   	if(married==""){
	    	window.alert("Maritial Status can't be empty");
	      	return false;
	   	}
	   	var workshift = document.forms["myForm"]["workshift"].value;
	   	if(workshift==""){
	    	window.alert("Work Shift can't be empty");
	      	return false;
	   	}
	   	var smoker = document.forms["myForm"]["smoker"].value;
	   	if(smoker==""){
	    	alert("Smoker can't be empty");
	      	return false;
	   	}
	   	var gender = document.forms["myForm"]["gender"].value;
	   	if(gender==""){
	    	alert("Gender can't be empty");
	      	return false;
	   	}
	   	 	var dob = document.forms["myForm"]["dob"].value;
	   	if(dob==""){
	    	alert("Gender can't be empty");
	      	return false;
	   	}
	  
	  

		document.getElementByName("myForm").submit();

	}
</script>

<script type="text/javascript" src="app/view/js/main.js"></script>

</body>
</html>