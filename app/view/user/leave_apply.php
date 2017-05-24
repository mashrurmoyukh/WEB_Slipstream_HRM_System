<?php

$error_id = "";
$error_from="";
$error_leaveType="";
$error_name = "";
$error_to = "";



$id = $_SESSION['user_id'];
$name = $_SESSION['name'];

$from= "";
$leaveType="";
$to="";
$error_count = 0;




if($_SERVER['REQUEST_METHOD']=="POST"){
  $from = $_POST['from'];
  $leaveType = $_POST['leaveType'];
  $to = $_POST['to'];
  $startTimeStamp = strtotime("$from");


  $endTimeStamp = strtotime("$to");

  $timeDiff = abs($endTimeStamp - $startTimeStamp);

			$numberDays = $timeDiff/86400;  // 86400 seconds in one day

			// and you might want to convert to integer
			$numberDays = intval($numberDays);








      if($from == ""){
       $error_password = "Date can't be empty";
       $error_count++;
     }
     if($leaveType == ""){
       $error_confirm_password = "Leave Type can't be empty";
       $error_count++;
     }

     if($to == ""){
       $error_id = "Dates cant be empty";
       $error_count++;
     }

     if($error_count == 0){

      $leave = array(
        'id' => $id,
        'name' => $name,
        'from' => $from,
        'leaveType' => $leaveType,
        'to' => $to,
        'numberDays' => $numberDays,


        );
      /*  var_dump("$leave[id]");
        var_dump("$leave[name]");
        var_dump("$leave[leaveType]");
        var_dump("$leave[from]");
         var_dump("$leave[to]");
         var_dump("$leave[numberDays]");*/


         if(addLeave($leave)) {
          $success=1;
       	//echo "hi2";

        }
      }


    }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
      <title>Apply Leave</title>

      <link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/add.css">
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script >
        $(document).ready(function() {
          $("#datepicker").datepicker();

        });
        $(document).ready(function() {
          $("#datepicker1").datepicker();

        });
      </script>
    </head>
    <body bgcolor="#e3e4e5">

      <div>
       <center>
        <form method="post"  onsubmit="return validateForm()" name="myForm"> 

          <!-- /*//when validateForm() return false -  form will not submit and will not redirect too*/ -->


          <?php if(isset($success)) : ?>
            <div class="success" style="color:white">
             Successfully Applied for leave!!!!

           </div>
         <?php endif; ?>
         <table  style="margin-bottom: 100px;" align="center" class="addtable" style="width: 100%">
          <tr align="center">
           <td colspan="2" style="text-align: center">
            <font size="6">	APPLY LEAVE </font>
          </td>
        </tr>
        <tr align="center">
         <td>
          <font size="4">	From </font>
        </td>
        <td>
          <input type="text" id="datepicker" value="<?= $from; ?>" name="from" size=45/><br/><span class="error"><?php echo $error_from; ?></span>
        </td>
      </tr>
      <tr align="center">
       <td>
        <font size="4">	To </font>
      </td>
      <td>
        <input type="text" id="datepicker1" value="<?= $to; ?>" name="to" size=45/><br/><span class="error"><?php echo $error_to; ?></span>
      </td>
    </tr>
    <tr align="center">
     <td>
      <font size="4">	Leave Type </font>
    </td>
    <td>
      <input type="text" value="<?= $leaveType; ?>" name="leaveType" size=45/><br/><span class="error"><?php echo $error_leaveType; ?></span>
    </td>
  </tr>



  <tr align="center">
   <td colspan="2" align="right" style="text-align: right">
    <button type="submit"  class="button"  name="submit">Apply </button>
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


  	

   var from = document.forms["myForm"]["from"].value;
   if(from==""){
     window.alert("Dates can't be empty");
     return false;
   }

   var leaveType = document.forms["myForm"]["leaveType"].value;
   if(leaveType==""){
    window.alert("Leave Type can't be empty");
    return false;
  }
  var to = document.forms["myForm"]["to"].value;
  if(to==""){
    window.alert("No Of Days can't be empty");
    return false;
  }
  


  document.getElementByName("myForm").submit();

}

</script>



</body>
</html>