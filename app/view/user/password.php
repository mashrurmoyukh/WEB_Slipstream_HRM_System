<?php
    $error_id = "";
    $error_password="";
    $error_confirmPassword="";
    $error_newPassword="";

    $user_id = $_GET['user_id'];
   // echo " $user_id";
   
    $password="";
    $confirmPassword="";
    $newPassword="";
   
    $error_count = 0;
    
   

    if($_SERVER['REQUEST_METHOD']=="POST"){
       
        $password = $_POST['password'];
        $newPassword = $_POST['newPassword'];
        
        $confirmPassword = $_POST['confirmPassword'];
       
        

      if($password == ""){
             $error_password = "Current Password can't be empty";
             $error_count++;
      }
      if($confirmPassword == ""){
             $error_confirmPassword = "Confirm Password can't be empty";
             $error_count++;
      }

      if($newPassword == ""){
             $error_newPassword = "New Password can't be empty";
             $error_count++;
      }

       if($error_count == 0){

        $user = array(
                    'user_id'=>$user_id,
                    
                    'password' => md5($newPassword),
                    
                    
                );
        //var_dump("$user[user_id]");
       
       if(updatePassword($user)){
              $success = 1;
            // echo "done";
          }

       }
     }


    
?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>

<link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
</head>
<body bgcolor="#e3e4e5">

<div>
   <center>
      <form method="post"  onsubmit="return validateForm()" name="myForm"> 

      <!-- /*//when validateForm() return false -  form will not submit and will not redirect too*/ -->
     

      <?php if(isset($success)) : ?>
      <div class="success" style="color:white">
        Successfully Password Changed!!!!

      </div>
  <?php endif; ?>
         <table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
            <tr align="center">
               <td colspan="2" style="text-align: center">
                  <font size="6">   Change Password </font>
               </td>
            </tr>
           
          
            <tr align="center">
               <td>
                  <font size="4">Password </font>
               </td>
               <td>
                  <input type="password" name="password" size=45/>
                  <br/><span class="error"><?php echo $error_password; ?></span>
               </td>
            </tr>
             <tr align="center">
               <td>
                  <font size="4">New Password</font>
               </td>
               <td>
                  <input type="password" name="newPassword" size=45/>
                  <br/><span class="error"><?php echo $error_newPassword; ?></span>
               </td>
            </tr>
            <tr align="center">
               <td>
                  <font size="4">Confirm Password</font>
               </td>
               <td>
                  <input type="password" name="confirmPassword" size=45/>
                  <br/><span class="error"><?php echo $error_confirmPassword; ?></span>
               </td>
            </tr>
            <tr align="center">
               <td colspan="2" align="right" style="text-align: right;">
                  <button type="submit"  class="button"  name="submit">Change Password </button>
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

   var password = document.forms["myForm"]["password"].value;
   if(password==""){
    window.alert("Password can't be empty");
      return false;
   }

    var newPassword = document.forms["myForm"]["newPassword"].value;
   if(newPassword==""){
   window.alert("New Password Can't be empty");
      return false;
   }
   var confirmPassword = document.forms["myForm"]["confirmPassword"].value;
   if(confirmPassword==""){
    window.alert("Confirm password can't be empty");
      return false;
   }

   if(confirmPassword!==newPassword){
    window.alert("Reype password doesnt match");
      return false;
   }
  
   
   
document.getElementByName("myForm").submit();

 }

</script>



</body>
</html>