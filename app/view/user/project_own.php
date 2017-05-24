
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>My Project Reports</title>
	<style type="text/css">
		.user_project_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="user_project_body">
		<center>
			<table class="table" align="center" id="project_table">
				<tbody style="text-align: left;">
					<tr>
						
						<th style="width: 200px; padding: 8px;">
							<font size="3"> Project Name</font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Employee Name </font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Start Time </font>
						</th>
						<th style="width:  150px; padding: 8px;">
							<font size="3"> End Time </font>
						</th>
						<th style="width:  115px; padding: 8px;">
		               		<font size=3> Project Admin </font>
			            </th>
			            
					</tr>

	
				<?php
						if ($projectTime) {
							foreach ($projectTime as $time) {
											echo   "<tr>
										<td style='padding: 8px;'>$time[name]</td>
								 		<td style='padding: 8px;'>$time[employee]</td>
								 		<td style='padding: 8px;'>$time[start_time]</td>
								 		<td style='padding: 8px;'>$time[end_time]</td>
								 		<td style='padding: 8px;'>$time[admin]</td>
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
</html>