<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title> Vacancie </title>
	<style type="text/css">
		.vacancie_show_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="vacancie_show_body">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Vacancie Name..">
		<center>
			<table class="table" align="center" id="vacancies_table">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 700px; padding: 8px;">
							<font size="3"> Vacancy Name </font>
						</th>
						<th style="width:  220px; padding: 8px;">
							<font size="3"> Job Title </font>
						</th>
						<th style="width:  270px; padding: 8px;">
							<font size="3"> Hiring Manager </font>
						</th>
						<th style="width:  200px; padding: 8px;">
							<font size="3"> Status </font>
						</th>
					</tr>
					<?php
						foreach($vacancy as $report){
							echo
							"<tr>
								<td style='padding: 8px;'>$report[vacancy] </td>
								<td style='padding: 8px;'>$report[job_title]</td>
								<td style='padding: 8px;'>$report[hiring_manager]</td>
								<td style='padding: 8px;'>$report[status]</td>
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
		  	table = document.getElementById("vacancies_table");
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
<body>
</html>