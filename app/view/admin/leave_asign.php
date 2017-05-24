<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title> Asign Leave</title>
	<style type="text/css">
		.leave_asign_body{
			margin: 5px; 
		}

		.approve{
		    background-color: #286090; 
		    border: none;
		    color: white;
		    padding: 10px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;  
		}

		.reject{
		    background-color: red; 
		    border: none;
		    color: white;
		    padding: 10px 10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="leave_asign_body">
		<center>
			<table class="table" align="center">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 200px; padding: 8px;">
							<font size="3"> Employee Name </font>
						</th>
						<th style="width:  130px; padding: 8px;">
							<font size="3"> Start Date </font>
						</th>
						<th style="width:  130px; padding: 8px;">
							<font size="3"> End Date </font>
						</th>
						<th style="width:  200px; padding: 8px;">
							<font size="3"> Leave Type </font>
						</th>
						<th style="width:  130px; padding: 8px;">
							<font size="3"> Number of days </font>
						</th>
						<th style="width:  110px ; padding: 8px;">
							<font size=3> Status </font>
						</th>
						<th style="width:  100px; padding: 8px;">
							<font size=3> Reject </font>
						</th>
						<th style="width:  100px; padding: 8px;">
							<font size=3> Approve </font>
						</th>
					</tr>

					<?php			
						foreach($leaveList as $leave){
							echo
							"<tr>
								<td style='padding: 8px;'>$leave[name]</td>
								<td style='padding: 8px;'>$leave[start]</td>
								<td style='padding: 8px;'>$leave[end]</td>
								<td style='padding: 8px;'>$leave[leave_type]</td>
								<td style='padding: 8px;'>$leave[days]</td>
								<td style='padding: 8px;'>$leave[status]</td>	 		
								<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_leave_reject&employee_id=$leave[employee_id]' class='reject'> REJECT </a></td>
								<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_leave_approve&employee_id=$leave[employee_id]'class='approve'>APPROVE </a></td>
							</tr>";

						}
					?>
				</tbody>
			</table>
		</center>
	</div>
<body>
</html>