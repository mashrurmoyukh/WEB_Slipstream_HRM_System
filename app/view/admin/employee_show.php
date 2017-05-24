<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Employee List</title>
	<style type="text/css">
		.employee_show_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="employee_show_body">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Employee Name..">
		<center>
			<table class="table" align="center" id="employee_table">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 50px; padding: 8px;">
							<font size="3"> ... </font>
						</th>
						<th style="width: 240px; padding: 8px;">
							<font size="3"> Name </font>
						</th>
						<th style="width:  140px; padding: 8px;">
							<font size="3"> Gender </font>
						</th>
						<th style="width:  140px; padding: 8px;">
							<font size="3"> DOB </font>
						</th>
						<th style="width:  200px; padding: 8px;">
							<font size="3"> Job Tile </font>
						</th>
						<th style="width:  150px; padding: 8px;">
							<font size="3"> Sub Unit </font>
						</th>
						<th style="width:  175px; padding: 8px;">
			           		<font size=3> Maritial Status </font>
			            </th>
			            <th style="width:  125px ; padding: 8px;">
			               <font size=3> Work Shift </font>
			            </th>
			            <th style="width:  100px ; padding: 8px;">
			               <font size=3> Smoker </font>
			            </th>
					</tr>
					<?php
						foreach($EmployeeList as $employee){
						 echo "
						 	<tr>
						 		<td><img height='60' width='60' src='/Slipstream_HRM_System/app/view/Images/User_Images/".$employee['user_image']."' alt='user image' style='border-radius:50%; padding: 1px;'/></td>
						 		<td style='padding: 8px;'>$employee[name]</td>
			 					<td style='padding: 8px;'>$employee[gender]</td>
			 					<td style='padding: 8px;'>$employee[dob]</td>
			 					<td style='padding: 8px;'>$employee[job_title]</td>	 
			 					<td style='padding: 8px;'>$employee[sub_unit]</td>
			 					<td style='padding: 8px;'>$employee[married]</td>
			 					<td style='padding: 8px;'>$employee[workshift]</td>	 
			 					<td style='padding: 8px;'>$employee[smoker]</td>	 
						 	</tr>";

						}
					?>
				</tbody>
			</table>
		</center>
	</div>

	<script>
		function myFunction() {
			var input, filter, table, tr, td, i;
		  	input = document.getElementById("myInput");
		  	filter = input.value.toUpperCase();
		  	table = document.getElementById("employee_table");
		  	tr = table.getElementsByTagName("tr");
		  	for (i = 0; i < tr.length; i++) {
		    	td = tr[i].getElementsByTagName("td")[1];
		    	if (td) {
		      	if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
		        	tr[i].style.display = "";
		      	} else {
		        	tr[i].style.display = "none";
		      	}
		    	}       
		  	}
		}
	</script>
</body>
</html>
