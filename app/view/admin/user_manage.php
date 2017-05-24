<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>User Management</title>
	<style type="text/css">
		.user_manage_body{
			margin: 5px; 
		}
	</style>
	<link rel="stylesheet" type="text/css" href="app/view/css/table.css">
</head>
<body bgcolor="#e3e4e5">
	<div class="user_manage_body">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Employee Name..">
		<center>
			<table class="table" align="center" id="user_table">
				<tbody style="text-align: left;">
					<tr>
						<th style="width: 50px; padding: 8px;">
							<font size="3"> ... </font>
						</th>
						<th style="width: 200px; padding: 8px;">
							<font size="3"> User ID </font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Employee Name </font>
						</th>
						<th style="width:  260px; padding: 8px;">
							<font size="3"> Email </font>
						</th>
						<th style="width:  150px; padding: 8px;">
							<font size="3"> User Type </font>
						</th>
						<th style="width:  115px; padding: 8px;">
		               		<font size=3> Edit </font>
			            </th>
			            <th style="width:  115px ; padding: 8px;">
			               <font size=3> Delete </font>
			            </th>
					</tr>
					<?php
						foreach ($userList as $user) {
							if ($user['user_type'] == "admin") {
								echo
							 	"<tr>
							 		<td><img height='60' width='60' src='/Slipstream_HRM_System/app/view/Images/User_Images/".$user['user_image']."' alt='user image' style='border-radius:50%; padding: 1px;'/></td>
									<td style='padding: 8px;'>$user[user_id]</td>
							 		<td style='padding: 8px;'>$user[name]</td>
							 		<td style='padding: 8px;'>$user[email]</td>
							 		<td style='padding: 8px;'>$user[user_type]</td>
							 		<td style='padding: 8px;'> ... </td>
									<td style='padding: 8px;'> ... </td>
							 	</tr>";
							}
							else{
								echo
							 	"<tr>
							 		<td><img height='60' width='60' src='/Slipstream_HRM_System/app/view/Images/User_Images/".$user['user_image']."' alt='user image' style='border-radius:50%; padding: 1px;'/></td>
									<td style='padding: 8px;'>$user[user_id]</td>
							 		<td style='padding: 8px;'>$user[name]</td>
							 		<td style='padding: 8px;'>$user[email]</td>
							 		<td style='padding: 8px;'>$user[user_type]</td>	 		
									<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_user_edit&id=$user[id]' class='edit'> <img src='http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Edit_Icon.png' align='center'> Edit </a></td>
									<td style='padding: 8px;'><a href='/Slipstream_HRM_System/?admin_user_delete&id=$user[id]' class='delete'> <img src='http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Remove_Icon.png' align='center'> Delete </a></td>
							 	</tr>";
							}
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
		  	table = document.getElementById("user_table");
		  	tr = table.getElementsByTagName("tr");
		  	for (i = 0; i < tr.length; i++) {
		    	td = tr[i].getElementsByTagName("td")[2];
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