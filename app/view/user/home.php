<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Home</title>
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  	max-width: 310px;
		  	margin: auto;
		  	text-align: center;
		  	font-family: arial;
		}

		.container::after {
			content: "";
		  	clear: both;
		  	display: table;
		}

		a {
		  	text-decoration: none;
		  	font-size: 22px;
		  	color: black;
		}


		.slideshow-container {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  	position: relative;
		  	margin: auto;
		}

		.text {
		  	color: #f2f2f2;
		  	font-size: 15px;
		 	padding: 8px 12px;
		  	position: absolute;
		  	bottom: 8px;
		  	width: 100%;
		  	text-align: left;
		}

		.numbertext {
		  	color: #f2f2f2;
		  	font-size: 12px;
		  	padding: 8px 12px;
		  	position: absolute;
		  	top: 0;
		}

		.dot {
		  	height: 13px;
		  	width: 13px;
		  	margin: 0 2px;
		  	background-color: #bbb;
		  	border-radius: 50%;
		  	display: inline-block;
		  	transition: background-color 0.6s ease;
		}

		.active {
		  	background-color: #717171;
		}

		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
		  	animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  	from {opacity: .4} 
		  	to {opacity: 1}
		}
		/*The @keyframes rule specifies the animation code.

		The animation is created by gradually changing from one set of CSS styles to another.*/

		@keyframes fade {
		  	from {opacity: .4} /*ocacity stands for transparency*/
		  	to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  	.text {font-size: 11px}
		}
		.footer {

				  width:100%;
				  position:fixed;
				  bottom:0;
				  margin-bottom:  0px;

				 
				  background-color:#333;
				  text-align: center;
				  color: white;
				}
		
	</style>
</head>
<body bgcolor="#e3e4e5">
	<table>
		<tbody>
			<tr>
				<td style="width: 30%">
					<div class="card">
					<?php echo "<img src='/Slipstream_HRM_System/app/view/Images/User_Images/".$userList['user_image']."' alt='John' style='width: 70%' align='center'>"; ?>
					  <div class="container">
					    <h1><?php echo "$userList[name]"; ?></h1>
					    <p class="title"><?php echo "$userList[job_title]"; ?></p>
					    <p size="5"><b><?php echo "$userList[user_type]"; ?><b></p>
					</div>
				</td>
				<td>
					<div class='slideshow-container'>
						<div class='mySlides fade'>
							<div class='numbertext'>1 / 6</div>
							<img src='/Slipstream_HRM_System/app/view/Images/Slider_Images/Slider_Picture_1.jpg' style='width: 700px; height: 320px'>
							<div class='text'>Design Section</div>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'>2 / 6</div>
							<img src='/Slipstream_HRM_System/app/view/Images/Slider_Images/Slider_Picture_2.jpg' style='width: 700px; height: 320px'>
							<div class='text'>Conference Room</div>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'>3 / 6</div>
							<img src='/Slipstream_HRM_System/app/view/Images/Slider_Images/Slider_Picture_3.jpeg' style='width: 700px; height: 320px'>
							<div class='text'>Sales</div>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'>4 / 6</div>
							<img src='/Slipstream_HRM_System/app/view/Images/Slider_Images/Slider_Picture_4.jpeg' style='width: 700px; height: 320px'>
							<div class='text'>Night Shift Work</div>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'>5 / 6</div>
							<img src='/Slipstream_HRM_System/app/view/Images/Slider_Images/Slider_Picture_5.jpeg' style='width: 700px; height: 320px'>
							<div class='text'>Requirement Analysis</div>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'>5 / 6</div>
							<img src='/Slipstream_HRM_System/app/view/Images/Slider_Images/Slider_Picture_6.jpg' style='width: 700px; height: 320px'>
							<div class='text'>Caption Five</div>
						</div>
					</div> <br/>
					<div style='text-align:center'>
						<span class='dot'></span> 
						<span class='dot'></span> 
						<span class='dot'></span> 
						<span class='dot'></span> 
						<span class='dot'></span>
						<span class='dot'></span> 
					</div>
				</td>
				<td style="width: 30%" >
				<form align="top" style="color: #33A606;">
  <fieldset >
    <legend><center><b>Quick Launch</b></center></legend>
<table>
<tbody>
<tr>
<td>
    <a href="/Slipstream_HRM_System/?user_leave_apply">
  <img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/ApplyLeave.png" alt="Apply Leave Leave" style="width:42px;height:42px;border:0;">
</a> &nbsp &nbsp <br><b>Apply Leave</b>
  </td>  
  <td>
   &nbsp &nbsp <a href="/Slipstream_HRM_System/?user_leave_show">
  <img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/MyLeave.png" alt="My Leave" style="width:42px;height:42px;border:0;">
</a> &nbsp &nbsp <br><b> &nbsp &nbsp My Leave</b>
</td>
 <td>
     &nbsp &nbsp <a href="/Slipstream_HRM_System/?user_project_own">
  <img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/MyTimesheet.png" alt="My project" style="width:42px;height:42px;border:0;">
</a> &nbsp &nbsp <br><b> &nbsp &nbsp Project Timesheet</b>
</td>

   </tr>
    </tbody>
    </table>
  </fieldset>
</form>
					
				</td>
			</tr>
		</tbody>
	</table>

	<script>
  	var slideIndex = 0;
  	showSlides();
  	function showSlides() {
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		var dots = document.getElementsByClassName("dot");
  		for (i = 0; i < slides.length; i++) {
  			/*Every previous image will not be displayed, the display value will be none for the prvs one*/
  			slides[i].style.display = "none";  
  		}
  		slideIndex++;
    	if (slideIndex> slides.length) {slideIndex = 1}    
    	for (i = 0; i < dots.length; i++) {
    		/*after every Iteration, changes the class name of "dot" into "active"*/
    		dots[i].className = dots[i].className.replace("active", "");
    	}
    	/*present slide will be displayed in inline manner on screen*/
    	slides[slideIndex-1].style.display = "inline";  
    	dots[slideIndex-1].className += " active";
    	setTimeout(showSlides, 3500); // Change image every 2 seconds
    }
	</script>
	<div class="footer non-printable">&copy; Web Technology Project <span style="color:green">All rights reserved: <strong>SLIPSTREAM HRM</strong></span>


</div>

</body>
</html>