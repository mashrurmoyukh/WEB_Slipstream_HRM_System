<?php
	$error_id = "";
	$error_name="";
	$error_employee="";
	$error_startTime = "";
	$error_endTime = "";
	$error_admin="";


	$id = "";
	$name="";
	$employee="";
	$startTime = "";
	$endTime = "";
	$admin="";
	$error_count = 0;



	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_POST['name'];
		$employee = $_POST['employee'];
		$startTime = $_POST['startTime'];
		$endTime = $_POST['endTime'];
		$admin = $_POST['admin'];

		if($name == ""){
			$error_password = "Projects Name can't be empty";
			$error_count++;
		}

		if($employee == ""){
			$error_confirm_password = "Employee Name can't be empty";
			$error_count++;
		}

		if($startTime == ""){
			$error_id = "Project Start Date can't be empty";
			$error_count++;
		}


		if($endTime == ""){
			$error_id = "Project End Date can't be empty";
			$error_count++;
		}

		if($admin == ""){
			$error_id = "Admin of Project can't be empty";
			$error_count++;
		}

		if($error_count == 0){
			$project = array(
	      				//'user_id' => $id,
				'name' => $name,
				'employee' => $employee,
				'startTime' => $startTime,
				'endTime' => $endTime,
				'admin' => $admin,
				);

			if(addProject($project)) {
				$success=1;
			}
		}
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE html>
<html>
<head>
	<title>Add Project</title>
	<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script >
	   $(document).ready(function() {
	    $("#datepicker").datepicker();

	  });
	   $(document).ready(function() {
	    $("#datepicker1").datepicker();
	    
	  });
	</script>
</head>
<body bgcolor="#e3e4e5">
	<div>
		<center>
			<form method="post"  onsubmit="return validateForm()" name="myForm"> 
				<!-- /*//when validateForm() return false -  form will not submit and will not redirect too*/ -->
				<?php if(isset($success)) : ?>
					<div class="success" style="color:white">
						Successfully added new employee!!!!

					</div>
				<?php endif; ?>
				<table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
					<tr align="center">
						<td colspan="2" style="text-align: center">
							<font size="6">	ADD Project </font>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Project Name </font>
						</td>
						<td>
							<input type="text" value="<?= $name; ?>" name="name" size=45/><br/><span class="error"><?php echo $error_name; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Assign </font>
						</td>
						<td>
							<select name="employee">
			  					<option value="">Please select Role</option>
			                  	<?php foreach($userList as $user):?>
			                      <option value="<?= $user['name']; ?>"><?= $user['name']; ?></option>
			                   	<?php endforeach; ?>
			                   	<br/><span class="error"><?php echo $error_employee; ?></span>
			                </select>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Start Date </font>
						</td>
						<td>
							<input type="text" id="datepicker" value="<?= $startTime; ?>" name="startTime" size=45/><br/><span class="error"><?php echo $error_startTime; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4"> Dead Line </font>
						</td>
						<td>
							<input type="text" id="datepicker1" value="<?= $endTime; ?>" name="endTime" size=45/><br/><span class="error"><?php echo $error_endTime; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4"> Project Admin </font>
						</td>
						<td>
							<select name="admin">
			  					<option value="">Please select Role</option>
			                  	<?php foreach($userList as $user):?>
			                      <option value="<?= $user['name']; ?>"><?= $user['name']; ?></option>
			                   	<?php endforeach; ?>
			                   	<br/><span class="error"><?php echo $error_admin; ?></span>
			                </select>
						</td>
					</tr>
					<tr align="center">
						<td colspan="2" align="right" style="text-align: right">
							<button type="submit"  class="button"  name="submit">Add New Project </button>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>
	<!--  -->
	<!-- Validation with JAVA SCRIPT -->
	<!--  -->

	<script type="text/javascript" >
		function validateForm(){
			var name = document.forms["myForm"]["name"].value;
			if(name==""){
				window.alert("Problem with Project Name! Please correct");
				return false;
			}

			var employee = document.forms["myForm"]["employee"].value;
			if(employee==""){
				window.alert("Problem with Assign Employee");
				return false;
			}

			var startTime = document.forms["myForm"]["startTime"].value;
			if(startTime==""){
				window.alert("Problem with Start Time! Please Correct");
				return false;
			}

			var endTime = document.forms["myForm"]["endTime"].value;
			if(endTime==""){
				window.alert("Problem with Dead Line Time! Please Correct");
				return false;
			}

			var admin = document.forms["myForm"]["admin"].value;
			if(admin==""){
				window.alert("Project Admin can't be empty");
				return false;
			}
			document.getElementByName("myForm").submit();
		}
	</script>
</body>
</html>