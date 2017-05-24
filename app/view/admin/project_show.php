<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Project Management</title>
	<style type="text/css">
		.project_manage_body{
			margin: 5px; 
		}
		.complete{
		    background-color: #286090; 
		    border: none;
		    color: white;
		    padding: 10px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;  
		}

		.delete{
		    background-color: red; 
		    border: none;
		    color: white;
		    padding: 10px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		}

		.complete:hover{
		    background-color: #6093e5;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="project_manage_body">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Project Name..">
		<center>
			<table class="table" align="center" id="project_table">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 200px; padding: 8px;">
							<font size="3"> Project Name </font>
						</th>
						<th style="width:  220px; padding: 8px;">
							<font size="3"> Assigned </font>
						</th>
						<th style="width:  140px; padding: 8px;">
							<font size="3"> Start Time </font>
						</th>
						<th style="width:  140px; padding: 8px;">
							<font size="3"> End Time </font>
						</th>
						<th style="width:  220px; padding: 8px;">
							<font size="3"> Project Admin </font>
						</th>
						<th style="width:  130px; padding: 8px;">
							<font size="3"> Status </font>
						</th>
						<th style="width:  150px; padding: 8px;">
		               		<font size=3> Edit </font>
			            </th>
			            <th style="width:  120px ; padding: 8px;">
			               <font size=3> Delete </font>
			            </th>
					</tr>
					<?php
						foreach ($projectTime as $project) {
						 	echo
						 	"<tr>
								<td style='padding: 8px;'>$project[name]</td>
						 		<td style='padding: 8px;'>$project[employee]</td>
						 		<td style='padding: 8px;'>$project[start_time]</td>
						 		<td style='padding: 8px;'>$project[end_time]</td>
						 		<td style='padding: 8px;'>$project[admin]</td>
						 		<td style='padding: 8px;'>$project[status]</td>
								<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_project_complete&project_id=$project[project_id]' class='complete'> <img src='http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Complete_Icon.png' align='center'> Completed </a></td>
								<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_project_delete&project_id=$project[project_id]' class='delete'> <img src='http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Remove_Icon.png' align='center'> Drop </a></td>
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
		  	table = document.getElementById("project_table");
		  	tr = table.getElementsByTagName("tr");
		  	for (i = 0; i < tr.length; i++) {
		    	td = tr[i].getElementsByTagName("td")[0];
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