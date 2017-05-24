
<?php  require_once(APP_ROOT."/core/homeEmployee_service.php") ?>



<?php

	$error_id = "";
	$error_jobTitle="";
  $error_subUnit="";
  $error_married = "";
  
  $error_smoker="";
  $error_dob="";
  $error_gender="";
  $error_email="";


  $id = $user['id'];
  $jobTitle = $user['job_title'];
	$subUnit=$user['sub_unit'];
	$married=$user['married'];
	$smoker = $user['smoker'];
	$email = $user['email'];
  $dob=$user['dob'];
  $gender=$user['gender'];
  //$user_image=$user['user_image'];

  $error_count = 0;
    
   

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$jobTitle = $_POST['jobTitle'];
    $subUnit = $_POST['subUnit'];
   
    
    $gender = $_POST['gender'];
    $email=$_POST['email'];
    $married=$_POST['married'];
    $smoker=$_POST['smoker'];
    $dob=$_POST['dob'];
   // $user_image=$_POST['user_image'];

		
		
		

		  if(!validate_email($email)){
	         $error_email = "Not a valid email.";
	           $error_count++;
	      }
	    
	     
	    if($jobTitle == ""){
             $error_jobTitle = "Job Title can't be empty";
             $error_count++;
      }
      if($subUnit == ""){
             $error_subUnit = "Sub Unit can't be empty";
             $error_count++;
      }

      
       if($gender == ""){
             $error_gender = "Gender can't be empty";
             $error_count++;
      }
       if($dob == ""){
         $error_dob = "Not a valid date.";
         $error_count++;
      }
      if($married == ""){
             $error_married = "Maritial Status can't be empty";
             $error_count++;
      }
      if($smoker == ""){
             $error_smoker = "Smoker section can't be empty";
             $error_count++;
      }
   
       if($error_count == 0){

       	$user = array(
              'id'=>$id,
      				
      				'email' => $email,
              'jobTitle' => $jobTitle,
              'subUnit' => $subUnit,
              
              'smoker' => $smoker,
              'married' => $married,
              'dob' => $dob,
              'gender' => $gender,
      				
				);
       	//echo "hi";
       
       if(updateUser($user)){
              $success = 1;
             // echo "done";
          }

       }
  	 }
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script >
   $(document).ready(function() {
    $("#datepicker").datepicker();

  });
   
</script>
</head>
<body bgcolor="#e3e4e5">

<div>
   <center>
      <form method="post" enctype="multipart/form-data"  onsubmit="return validateForm()" name="myForm"> 
      <?php if(isset($success)) : ?>
      <div class="success" style="color:white">
      	Successfully Updated employee!!!!

      </div>
  <?php endif; ?>
         <table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
            <tr align="center">
               <td colspan="2" style="text-align: center">
                  <font size="6">	Edit Employee </font>
               </td>
            </tr>
            <tr align="center">
               <td>
                  <font size="4"> Job Title </font>
               </td>
               <td>
                  <select name="jobTitle" >
                     <option value="">Please Select A Job Title</option>
                     <option value="HR ADMIN">HR ADMIN</option>
                     <option value="IT MANAGER">IT MANAGER</option>
                     <option value="QA ENGINEER">QA ENGINEER</option>
                      <option value="SALES EXECUTIVE">SALES EXECUTIVE</option>
                       <option value="SOFTWARE ENGINEER">SOFTWARE ENGINEER</option>
                  </select>
                  <br/><span class="error"><?php echo $error_jobTitle; ?></span>
               </td>
            </tr>
           
            <tr align="center">
               <td>
                  <font size="4"> Sub Unit </font>
               </td>
               <td>
                  <select name="subUnit" >
                     <option value="">Please Select Sub Unit</option>
                     <option value="IT">IT</option>
                     <option value="Administration">Administration</option>
                     
                  </select>
                  <br/><span class="error"><?php echo $error_subUnit; ?></span>
               </td>
            </tr>

             <tr align="center">
               <td>
                  <font size="4"> Maritial Status </font>
               </td>
               <td>
                  <select name="married" >
                     <option value="">Please Select Status</option>
                     <option value="Single">Single</option>
                     <option value="Married">Married</option>
                     
                  </select>
                  <br/><span class="error"><?php echo $error_married; ?></span>
               </td>
            </tr>
           
            
            <tr align="center">
               <td>
                  <font size="4"> Smoker </font>
               </td>
               <td>
                  <select name="smoker" >
                     <option value="">Please Select</option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                     
                  </select>
                  <br/><span class="error"><?php echo $error_smoker; ?></span>
               </td>
            </tr>

             <tr align="center">
               <td>
                  <font size="4"> Date Of Birth </font>
               </td>
               <td>
                  <input type="text" id="datepicker" value="<?= $dob; ?>" name="dob" size=45/><br/><span class="error"><?php echo $error_dob; ?></span>
               </td>
            </tr>
            <tr align="center">
               <td>
                  <font size="4"> Gender </font>
               </td>
               <td>
                  <select name="gender" >
                     <option value="">Please Select</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                     <option value="Other">Other</option>
                     
                  </select>
                  <br/><span class="error"><?php echo $error_gender; ?></span>
               </td>
            </tr>
            <tr align="center">
               <td>
                  <font size="4">	Email </font>
               </td>
               <td>
                  <input type="text" value="<?= $email; ?>" name="email" size=45/><br/><span class="error"><?php echo $error_email; ?></span>
               </td>
            </tr>
             
            <tr align="center">
               <td colspan="2" align="right" style="text-align: right">
                  <button type="submit"  class="button"  name="submit">Update Employee </button>
               </td>
            </tr>
         </table>
      </form>
   </center>
</div>


<!--  -->
<!--  -->
<!--  -->
<!-- Validation with JAVA SCRIPT -->
<!--  -->
<!--  -->
<!--  -->


<script type="text/javascript" >
  function validateForm(){


  	
  
    var email = document.forms["myForm"]["email"].value;
   if(!checkMail(email)){
      window.alert("Problem with Email! Please correct");
      return false;
   }
    var jobTitle = document.forms["myForm"]["jobTitle"].value;
   if(jobTitle==""){
    alert("Job Title can't be empty");
      return false;
   }

    var subUnit = document.forms["myForm"]["subUnit"].value;
   if(subUnit==""){
   window.alert("Sub Unit can't be empty");
      return false;
   }
   var married = document.forms["myForm"]["married"].value;
   if(married==""){
    window.alert("Maritial Status can't be empty");
      return false;
   }
   var dob = document.forms["myForm"]["dob"].value;
   if(dob==""){
    window.alert("Date of Birth can't be empty");
      return false;
   }
   var smoker = document.forms["myForm"]["smoker"].value;
   if(smoker==""){
    alert("Smoker can't be empty");
      return false;
   }
   var gender = document.forms["myForm"]["gender"].value;
   if(gender==""){
    alert("Gender can't be empty");
      return false;
   }
   var email = document.forms["myForm"]["email"].value;
   if(gender==""){
    alert("Email can't be empty");
      return false;
   }
  
   
   
document.getElementByName("myForm").submit();

 }

</script>
<script type="text/javascript" src="app/view/js/main.js"></script>



</body>
</html>