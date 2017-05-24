<?php
	$error_employee = "";
	$error_case="";
	$error_penalty="";



	$employee = "";
	$case="";
	$penalty="";

	$error_count = 0;



	if($_SERVER['REQUEST_METHOD']=="POST"){
		$employee = $_POST['employee'];
		$case = $_POST['case'];
		$penalty = $_POST['penalty'];

		if($case == ""){
			$error_case = "Projects Name can't be empty";
			$error_count++;
		}

		if($employee == ""){
			$error_employee = "Employee Name can't be empty";
			$error_count++;
		}

		if($penalty == ""){
			$error_penalty = "Project Start Date can't be empty";
			$error_count++;
		}

		if($error_count == 0){
			$discipline = array(
				'employee' => $employee,
				'case' => $case,
				'penalty' => $penalty,
				);

			if(addDiscipline($discipline)) {
				$success=1;
			}
		}
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Add Discipline</title>
	<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
</head>
<body bgcolor="#e3e4e5">
	<div>
		<center>
			<form method="post"  onsubmit="return validateForm()" name="myForm"> 
				<?php if(isset($success)) : ?>
					<div class="success" style="color:white">
						Successfully Added New Disciplinary Case!!!!

					</div>
				<?php endif; ?>
				<table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
					<tr align="center">
						<td colspan="2" style="text-align: center">
							<font size="6">	ADD New Disciplinary Case </font>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Employee Name </font>
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
							<font size="4">	Case </font>
						</td>
						<td>
							<input type="text" value="<?= $case; ?>" name="case" size=45/><br/><span class="error"><?php echo $error_case; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Penalty</font>
						</td>
						<td>
							<input type="text" value="<?= $penalty; ?>" name="penalty" size=45/><br/><span class="error"><?php echo $error_penalty; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td colspan="2" align="right" style="text-align: right">
							<button type="submit"  class="button"  name="submit">Add New Discipline </button>
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
			var case = document.forms["myForm"]["case"].value;
			if(case==""){
				window.alert("Problem with Disciplinary Case! Please correct");
				return false;
			}

			var employee = document.forms["myForm"]["employee"].value;
			if(employee==""){
				window.alert("Problem with Employee Name!Please correct");
				return false;
			}

			var penalty = document.forms["myForm"]["penalty"].value;
			if(penalty==""){
				window.alert("Problem with Penalty! Please Correct");
				return false;
			}
			document.getElementByName("myForm").submit();
		}
	</script>
</body>
</html>