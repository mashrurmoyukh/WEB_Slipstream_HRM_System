<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>My Leave</title>
	<style type="text/css">
		.user_leave_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="user_leave_body">
		<center>
			<table class="table" align="center">
				<tbody style="text-align: left;">
					<tr>
						
						<th style="width: 200px; padding: 8px;">
							<font size="3"> Employee Name</font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Start Date </font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> End Date</font>
						</th>
						<th style="width:  150px; padding: 8px;">
							<font size="3"> Leave Type </font>
						</th>
						<th style="width:  115px; padding: 8px;">
		               		<font size=3> No. Of Days </font>
			            </th>
			            <th style="width:  115px; padding: 8px;">
		               		<font size=3> Status </font>
			            </th>
			            
					</tr>
	
	
				<?php
					if ($leaveList) {
						foreach($leaveList as $leave){
									 echo   "
									<tr>
									<td style='padding: 8px;'>$leave[name]</td>
							 		<td style='padding: 8px;'>$leave[start]</td>
							 		<td style='padding: 8px;'>$leave[end]</td>
							 		<td style='padding: 8px;'>$leave[leave_type]</td>
							 		<td style='padding: 8px;'>$leave[days]</td>
							 		<td style='padding: 8px;'>$leave[status]</td>
							 		
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