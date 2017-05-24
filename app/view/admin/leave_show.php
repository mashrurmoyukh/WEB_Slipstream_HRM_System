<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>  Leave List </title>
	<style type="text/css">
		.leave_show_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="leave_show_body">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Employee Name..">
		<center>
			<table class="table" align="center" id="leave_table">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 200px; padding: 8px;"><font size="3"><b>Employee Name<b></font></th>
						<th style="width: 150px; padding: 8px;"><font size="3"><b>Start Date<b></font></th>
						<th style="width: 150px; padding: 8px;"><font size="3"><b>End Date<b></font></th>
						<th style="width: 200px; padding: 8px;"><font size="3"><b>Leave Type<b></font></th>
						<th style="width: 130px; padding: 8px;"><font size="3"><b>Number of days<b></font></th>
						<th style="width: 100px; padding: 8px;"><font size="3"><b>Status<b></font></th>
					</tr>
					<?php
						foreach($leaveList as $leave){
							echo "
							 	<tr>
							 		<td style='padding: 8px;'>$leave[name]</td>
				 					<td style='padding: 8px;'>$leave[start]</td>
				 					<td style='padding: 8px;'>$leave[end]</td>
				 					<td style='padding: 8px;'>$leave[leave_type]</td>
				 					<td style='padding: 8px;'>$leave[days]</td>	 
				 					<td style='padding: 8px;'>$leave[status]</td> 
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
		  	table = document.getElementById("leave_table");
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

