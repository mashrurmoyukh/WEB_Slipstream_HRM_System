<?php
	$error_vacancy = "";
	$error_jobTitle="";
	$error_hiringManager="";
	$error_status="";


	$vacancy = "";
	$jobTitle="";
	$hiringManager="";
	$status="";


	$error_count = 0;



	if($_SERVER['REQUEST_METHOD']=="POST"){
		$vacancy = $_POST['vacancy'];
		$jobTitle = $_POST['jobTitle'];
		$hiringManager = $_POST['hiringManager'];
		$status = $_POST['status'];
		
		if($vacancy == ""){
			$error_vacancy = "Vacancy can't be empty";
			$error_count++;
		}

		if($jobTitle == ""){
			$error_jobTitle = "Job Title can't be empty";
			$error_count++;
		}

		if($hiringManager == ""){
			$error_hiringManager = "Hiring Manager can't be empty";
			$error_count++;
		}

		if($status == ""){
			$error_status = "Status can't be empty";
			$error_count++;
		}

		if($error_count == 0){
			$vac = array(
				'vacancy' => $vacancy,
				'jobTitle' => $jobTitle,
				'hiringManager' => $hiringManager,
				'status' => $status,
				);

	        if(addVacancy($vac)) {
	        	$success=1;
	        }
	    }
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Add Vacancie</title>
	<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
</head>
<body bgcolor="#e3e4e5">
	<div bgcolor="#e3e4e5">
		<center>
			<form method="post"  onsubmit="return validateForm()" name="myForm"> 
				<?php if(isset($success)) : ?>
					<div class="success" style="color:white">
						Successfully Added New Vacancy!!!!
					</div>
				<?php endif; ?>
				<table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
					<tr align="center">
						<td colspan="2" colspan="2" style="text-align: center">
							<font size="6">	ADD New Vacancy </font>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Vacancy Name </font>
						</td>
						<td>
							<input type="text" value="<?= $vacancy; ?>" name="vacancy" size=45/><br/><span class="error"><?php echo $error_vacancy; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Job Title </font>
						</td>
						<td>
							<input type="text" value="<?= $jobTitle; ?>" name="jobTitle" size=45/><br/><span class="error"><?php echo $error_jobTitle; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td>
							<font size="4">	Hiring Manager</font>
						</td>
						<td>
							<select name="hiringManager">
			  					<option value="">Please select Role</option>
			                  	<?php foreach($userList as $user):?>
			                      <option value="<?= $user['name']; ?>"><?= $user['name']; ?></option>
			                   	<?php endforeach; ?>
			                   	<br/><span class="error"><?php echo $error_hiringManager; ?></span>
			                </select>
						</td>
					</tr>

					<tr align="center">
						<td>
							<font size="4"> Status</font>
						</td>
						<td>
							<input type="text" value="<?= $status; ?>" name="status" size=45/><br/><span class="error"><?php echo $error_status; ?></span>
						</td>
					</tr>
					<tr align="center">
						<td colspan="2" align="right" style="text-align: right">
							<button type="submit"  class="button"  name="submit">Add New Vacancy </button>
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
			var vacancy = document.forms["myForm"]["vacancy"].value;
			if(vacancy==""){
				window.alert("Problem with Vacancy! Please correct");
				return false;
			}


			var jobTitle = document.forms["myForm"]["jobTitle"].value;
			if(jobTitle==""){
				window.alert("Problem with Job Title!Please correct");
				return false;
			}
			var hiringManager = document.forms["myForm"]["hiringManager"].value;
			if(hiringManager==""){
				window.alert("Problem with Hiring Manager! Please Correct");
				return false;
			}

			var status = document.forms["myForm"]["status"].value;
			if(status==""){
				window.alert("Problem with Status! Please Correct");
				return false;
			}
			document.getElementByName("myForm").submit();
		}
	</script>
</body>
</html>