<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Discipline</title>
	<style type="text/css">
		.user_discipline_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="user_discipline_body">
		<center>
			<table class="table" align="center" id="user_table">
				<tbody style="text-align: left;">
					<tr>
						
						<th style="width: 200px; padding: 8px;">
							<font size="3"> Employee Name</font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Case </font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Penalty </font>
						</th>
						<th style="width:  150px; padding: 8px;">
							<font size="3"> Status </font>
						</th>
						
			            
					</tr>
	
				<?php
					if ($discipline) {
						foreach ($discipline as  $time) {
									
									 echo   "
									<tr>
									<td style='padding: 8px;'>$time[employee_name]</td>
							 		<td style='padding: 8px;'>$time[case_name]</td>
							 		<td style='padding: 8px;'>$time[penalty]</td>
							 		
							 		<td style='padding: 8px;'>$time[Status]</td>
							 		
							 		</tr>";
							 		}
					}

						
					?>
				</tbody>
			</table>
		</center>
	</div>	
</body>
</html>