<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
		.user_manage_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="user_manage_body">
		<center>
			<table class="table" align="center" id="user_table">
				<tbody style="text-align: left;">
					<tr>

						<th style="width: 200px; padding: 8px;">
							<font size="3"> ...</font>
						</th>
						
						<th style="width: 200px; padding: 8px;">
							<font size="3"> User Id</font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Employee Name </font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Date of Birth </font>
						</th>
						<th style="width:  150px; padding: 8px;">
							<font size="3"> Email </font>
						</th>
						<th style="width:  115px; padding: 8px;">
		               		<font size=3> Salary </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Job Title </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Sub Unit </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Marritial Status </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Workshift </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Smoker </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Gender </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> User Type </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> ... </font>
			            </th>
			            
					</tr>
	
	
				<?php
		
									
									 echo   " <tr>
									 	
									<td style='padding: 8px;'><img height='80' width='80' src = '/Slipstream_HRM_System/app/view/Images/User_Images/".$userList['user_image']."' alt='user image'/></td>
							 		<td style='padding: 8px;'>$userList[user_id]</td>
							 		<td style='padding: 8px;'>$userList[name]</td>
							 		<td style='padding: 8px;'>$userList[dob]</td>
							 		<td style='padding: 8px;'>$userList[email]</td>
							 		<td style='padding: 8px;'>$userList[salary]</td>
							 		<td style='padding: 8px;'>$userList[job_title]</td>
							 		<td style='padding: 8px;'>$userList[sub_unit]</td>
							 		<td style='padding: 8px;'>$userList[married]</td>
							 		<td style='padding: 8px;'>$userList[workshift]</td>
							 		<td style='padding: 8px;'>$userList[smoker]</td>
							 		<td style='padding: 8px;'>$userList[gender]</td>
							 		<td style='padding: 8px;'>$userList[user_type]</td>
							 		<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?user_home_edit&user_id=$userList[user_id]' class='edit'> <img src='http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Edit_Icon.png' align='center'> Edit </a></td>
							 		</tr>";

									 	
									 
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
		  	table = document.getElementById("user_table");
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