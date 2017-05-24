<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
	<title> Show Discipline </title>
	<style type="text/css">
		.discipline_manage_body{
			margin: 5px; 
		}
		.clear{
		    background-color: #286090; 
		    border: none;
		    color: white;
		    padding: 10px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;  
		}

		.clear:hover{
		    background-color: #6093e5;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="discipline_manage_body">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Employee Name..">
		<center>
			<table class="table" align="center" id="discipline_table">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 250px; padding: 8px;">
							<font size="3"> Employee Name </font>
						</th>
						<th style="width:  650px; padding: 8px;">
							<font size="3"> Case Description </font>
						</th>
						<th style="width:  200px; padding: 8px;">
							<font size="3"> Status </font>
						</th>
						<th style="width:  250px; padding: 8px;">
							<font size="3"> Clear Progress </font>
						</th>
					</tr>
					<?php
						foreach($discipline as $report){
							echo
							"<tr>
								<td style='padding: 8px;'>$report[employee_name]</td>
						 		<td style='padding: 8px;'>$report[case_name]</td>
						 		<td style='padding: 8px;'>$report[Status]</td>
						 		<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_discipline_clear&discipline_id=$report[discipline_id]' class='clear'> <img src='http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Complete_Icon.png' align='center'> Clear Progress </a></td>
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
		  	table = document.getElementById("discipline_table");
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