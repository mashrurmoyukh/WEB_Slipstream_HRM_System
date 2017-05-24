<?php
  $error_id = "";
  $error_password="";
  $error_confirm_password="";
  $error_name = "";
  $error_email = "";
  $error_userType="";
  $error_salary="";
  $error_user_image="";


  $id = "";
  $password="";
  $confirm_password="";
  $name = "";
  $email = "";
  $userType="";
  $user_image="";
  $salary="";
  $error_count = 0;

  if($_SERVER['REQUEST_METHOD']=="POST"){
    $id = trim($_POST['user_id']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $userType = trim($_POST['userType']);
    $salary= trim($_POST['salary']);

    if(!validate_email($email)){
     $error_email = "Not a valid email.";
     $error_count++;
   }
   if(!validate_name($name)){
    $error_name = "Not a valid name.";
    $error_count++;
  }
  if(empty($userType)){
    $error_role = "Role can't be empty";
    $error_count++;
  }
  if(empty($salary)){
    $error_salary = "Salary can't be empty";
    $error_count++;
  }
  if($password == ""){
    $error_password = "Password can't be empty";
    $error_count++;
  }
  if($confirmPassword == ""){
    $error_confirm_password = "Confirm Password can't be empty";
    $error_count++;
  }

  if($id == ""){
    $error_id = "User Id can't be empty";
    $error_count++;
  }

        	//IMAGE ADD VALIDATION FOR PHP
  if(isset($_FILES['user_image'])){
   $errors= array();
   $file_name = $_FILES['user_image']['name'];
   $file_size = $_FILES['user_image']['size'];
   $file_tmp = $_FILES['user_image']['tmp_name'];
   $file_type = $_FILES['user_image']['type'];
        
        if($file_size > 2097152) {
         $error_user_image .="File size must be less than two mb";
         $errors[]='File size must be less than two mb';
       }

       if(empty($errors)==true) {
        move_uploaded_file($file_tmp , APP_ROOT."/app/view/Images/User_Images/".$file_name);
      }
      else{
       $error_user_image = "Something wrong with the image";
       $error_count++;
     }
   }

   if($error_count == 0){
     $user = array(
      'user_id' => $id,
      'name' => $name,
      'email' => $email,
      'password' => md5($password),
      'salary' => $salary,
      'user_type' => $userType,
      'user_image' => $file_name,	
      );
     if(addUser($user)) {
      $success=1;
    }
  }
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
</head>
<body bgcolor="#e3e4e5">
  <div>
   <center>
     <form method="post" enctype="multipart/form-data"  onsubmit="return validateForm()" name="myForm"> 
       <?php if(isset($success)) : ?>
        <div class="success" style="color:white">
         Successfully added new employee!!!!
       </div>
     <?php endif; ?>
     <table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
      <tr align="center">
        <td colspan="2" style="text-align: center">
         <font size="6">	ADD Employee </font>
       </td>
     </tr>
     <tr align="center">
      <td>
       <font size="4">	User ID </font>
     </td>
     <td>
       <input type="text" value="<?= $id; ?>" name="user_id" placeholder="Enter User ID.." size=45/><br/><span class="error"><?php echo $error_id; ?></span>
     </td>
   </tr>
   <tr align="center">
    <td>
     <font size="4">	Name </font>
   </td>
   <td>
     <input type="text" value="<?= $name; ?>" name="name" placeholder="Enter Employee Name.." size=45/><br/><span class="error"><?php echo $error_name; ?></span>
   </td>
 </tr>
 <tr align="center">
  <td>
   <font size="4">	Email </font>
 </td>
 <td>
   <input type="text" value="<?= $email; ?>" name="email" placeholder="Enter Employee Email.." size=45/><br/><span class="error"><?php echo $error_email; ?></span>
 </td>
</tr>
<tr align="center">
  <td>
   <font size="4"> Salary </font>
 </td>
 <td>
   <select name="salary" >
    <option value="">Please Select Class</option>
    <option value="50000">1st class</option>
    <option value="30000">2nd class</option>
    <option value="20000">3rd class</option>
  </select>
  <br/><span class="error"><?php echo $error_salary; ?></span>
</td>
</tr>

<tr align="center">
  <td>
   <font size="4">	Role </font>
 </td>
 <td>
  <select name="userType" >
   <option value="">Please Select Role</option>
   <option value="admin">Admin</option>
   <option value="user">User</option>
 </select>
 <br/><span class="error"><?php echo $error_userType; ?></span>
</td>
</tr>

<tr align="center">
  <td>
   <font size="4">Password </font>
 </td>
 <td>
   <input type="password" name="password" placeholder="Enter Password.." size=45/>
   <br/><span class="error"><?php echo $error_password; ?></span>
 </td>
</tr>
<tr align="center">
  <td>
   <font size="4">Confirm Password</font>
 </td>
 <td>
   <input type="password" name="confirmPassword" placeholder="Confirm Password.." size=45/>
   <br/><span class="error"><?php echo $error_confirm_password; ?></span>
 </td>
</tr>
<tr align="center">
  <td >
    <font size="4"> Select a file:</font>
  </td> 
  <td>
    <input type="file" name="user_image"/>
    <br/><span class="error"><?php echo $error_user_image; ?></span>
  </td>
</tr>
<tr align="center">
  <td colspan="2" align="right" style="text-align: right">
   <button type="submit"  class="button"  name="submit">Add New Employee </button>
 </td>
</tr>
</table>
</form>
</center>
</div>

<script type="text/javascript" >
	function validateForm(){
   var user_id = document.forms["myForm"]["user_id"].value;
   if(user_id==""){
     window.alert("Problem with User Id! Please correct");
     return false;
   }
   var x = document.forms["myForm"]["name"].value;
   
   if(!checkName(x)){
     window.alert("Problem with name!. Please correct");
     return false;
   }
   var email = document.forms["myForm"]["email"].value;
   if(!checkMail(email)){
     window.alert("Problem with Email! Please correct");
     return false;
   }
   var salary = document.forms["myForm"]["salary"].value;
   if(salary==""){
     alert("Salary can't be empty");
     return false;
   }

   var userType = document.forms["myForm"]["userType"].value;
   if(userType==""){
     window.alert("Role can't be empty");
     return false;
   }
   var password = document.forms["myForm"]["password"].value;
   if(password==""){
     window.alert("Password can't be empty");
     return false;
   }
   var confirmPassword = document.forms["myForm"]["confirmPassword"].value;
   if(confirmPassword==""){
     window.alert("Confirm password can't be empty");
     return false;
   }

   var user_image = document.forms["myForm"]["user_image"].value;
   if(user_image==""){
    alert("Image can't be empty");
    return false;
  } 
  var password = document.forms["myForm"]["password"].value;
  var confirmPassword = document.forms["myForm"]["confirmPassword"].value;

  if(password!==confirmPassword){
     window.alert("Password & Confirm Password doenst match ");
     return false;
   }
  document.getElementByName("myForm").submit();
}
</script>

<script type="text/javascript" src="app/view/js/main.js"></script>

</body>
</html>