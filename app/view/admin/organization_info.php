<?php
	$error_name = "";
	$error_fax = "";
	$error_email = "";
	$error_phone = "";
	$error_taxID = "";
	$error_reg_Num = "";
	$error_street = "";
	$error_city = "";
	$error_state = "";
	$error_country = "";
	$error_zip = "";

	$organization_info = simplexml_load_file("organization_info.xml");

	$name = $organization_info->name;
	$fax = $organization_info->fax;
	$email = $organization_info->email;
	$phone = $organization_info->phone;
	$taxID = $organization_info->taxId;
	$reg_Num = $organization_info->reg_num;
	$street = $organization_info->street;
	$city = $organization_info->city;
	$state = $organization_info->state;
	$country = $organization_info->country;
	$zip = $organization_info->zip;

	$error_count = 0;

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_POST['name'];
		$fax = $_POST['fax'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$taxID = $_POST['taxID'];
		$reg_Num = $_POST['reg_Num'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$zip = $_POST['zip'];

		if (empty($name)) {
			$error_name = "Not a valid Name";
      		$error_count++;
		}

		if (empty($taxID)) {
			$error_taxID = "Not a valid Tax ID";
			$error_count++;
		}

		if (empty($reg_Num)) {
			$error_reg_Num = "Not a valid Reg Num";
			$error_count++;
		}

		if (!validate_email($email)) {
			$error_email = "Not a valid Email";
			$error_count++;
		}

		if (empty($phone)) {
			$error_phone = "Not a Phone Number";
			$error_count++;
		}

		if (empty($fax)) {
			$error_fax = "Not a valid Fax";
			$error_count++;
		}

		if (empty($street)) {
			$error_street = "Not a valid Street Name";
			$error_count++;
	
		}

		if (empty($city)) {
			$error_city = "Not a valid City Name";
			$error_count++;
	
		}

		if (empty($state)) {
			$error_state = "Not a State Name";
			$error_count++;
	
		}

		if (empty($country)) {
			$error_country = "Not a valid Counrey Name";
			$error_count++;
		}

		if (empty($zip)) {
			$error_zip = "Not a valid ZIP Code";
			$error_count++;
		}

		if($error_count == 0){
			$organization_info = simplexml_load_file("organization_info.xml");
			$organization_info->name = $name;
			$organization_info->fax = $fax;
			$organization_info->email = $email;
			$organization_info->phone = $phone;
			$organization_info->taxId = $taxID;
			$organization_info->reg_num = $reg_Num;
			$organization_info->street = $street;
			$organization_info->city = $city;
			$organization_info->state = $state;
			$organization_info->country = $country;
			$organization_info->zip = $zip;

			$organization_info->asXML("organization_info.xml");
			$success = 1;
		}
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title>Organization Information</title>
  <link rel="stylesheet" type="text/css" href="/Slipstream_HRM_System/app/view/css/edit.css">
</head>
<body bgcolor="#e3e4e5">
<div>
   <center>
      <form method="post" enctype="multipart/form-data"  onsubmit="return validateForm()" name="myForm"> 

      <?php if(isset($success)) : ?>
        <div class="success" style="color:white">
        	Successfully Updated Organization Information!!!!
        </div>
      <?php endif; ?>

       <table  style="margin-bottom: 100px;" align="center" class="edittable" style="width: 100%">
          <tr align="center">
             <td colspan="2" style="text-align: center">
                <font size="6">	Organization Information </font>
             </td>
          </tr>
          <tr align="center">
             <td>
                <font size="4">	Organization Name </font>
             </td>
             <td>
                <input type="text" value="<?= $name; ?>" name="name" size=45/><br/><span class="error"><?php echo $error_name; ?></span>
             </td>
          </tr>
          <tr align="center">
             <td>
                <font size="4">	Tax ID </font>
             </td>
             <td>
                <input type="text" value="<?= $taxID; ?>" name="taxID" size=45/><br/><span class="error"><?php echo $error_taxID; ?></span>
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
             <td>
                <font size="4">	Reg No. </font>
             </td>
             <td>
                <input type="text" value="<?= $reg_Num ?>" name="reg_Num" size=45/><br/><span class="error"><?php echo $error_reg_Num; ?></span>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Phone </font>
             </td>
             <td>
                <input type="text" value="<?= $phone ?>" name="phone" size=45/><br/><span class="error"><?php echo $error_phone; ?></span>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Fax </font>
             </td>
             <td>
                <input type="text" value="<?= $fax ?>" name="fax" size=45/><br/><span class="error"><?php echo $error_fax; ?></span>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Street </font>
             </td>
             <td>
                <input type="text" value="<?= $street ?>" name="street" size=45/><br/><span class="error"><?php echo $error_street; ?></span>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	City </font>
             </td>
             <td>
                <input type="text" value="<?= $city ?>" name="city" size=45/><br/><span class="error"><?php echo $error_city; ?></span>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	State </font>
             </td>
             <td>
                <input type="text" value="<?= $state ?>" name="state" size=45/><br/><span class="error"><?php echo $error_state; ?></span>
             </td>
          </tr>

          <tr align="Country">
             <td>
                <font size="4">	Fax </font>
             </td>
             <td>
                <input type="text" value="<?= $country ?>" name="country" size=45/><br/><span class="error"><?php echo $error_country; ?></span>
             </td>
          </tr>

          <tr align="ZIP">
             <td>
                <font size="4">	Fax </font>
             </td>
             <td>
                <input type="text" value="<?= $zip ?>" name="zip" size=45/><br/><span class="error"><?php echo $error_zip; ?></span>
             </td>
          </tr>
          <tr align="center">
             <td colspan="2" align="right" style="text-align: right">
                <button type="submit"  class="button"  name="submit">Update</button>
             </td>
          </tr>
       </table>
      </form>
   </center>
</div>

<!-- Validation with JAVA SCRIPT -->

<script type="text/javascript" >
  function validateForm(){
    var name = document.forms["myForm"]["name"].value;
    if(name==""){
      window.alert("Problem with Organization Name! Please correct");
      return false;
    }

    var taxID = document.forms["myForm"]["taxID"].value;
    if(taxID==""){
      window.alert("Problem with Tax ID! Please correct");
      return false;
    }

    var email = document.forms["myForm"]["email"].value;
    if(!checkMail(email)){
      window.alert("Problem with Email! Please correct");
      return false;
    }

    var reg_Num = document.forms["myForm"]["reg_Num"].value;
    if(reg_Num==""){
      window.alert("Problem with Reg. No.! Please correct");
      return false;
    }

    var phone = document.forms["myForm"]["phone"].value;
    if(phone==""){
      window.alert("Problem with Phone Number! Please correct");
      return false;
    }

    var fax = document.forms["myForm"]["fax"].value;
    if(fax==""){
      window.alert("Problem with Fax! Please correct");
      return false;
    }

    var street = document.forms["myForm"]["street"].value;
    if(street==""){
      window.alert("Problem with Organization Name! Please correct");
      return false;
    }

    var city = document.forms["myForm"]["city"].value;
    if(name==""){
      window.alert("Problem with Street Name! Please correct");
      return false;
    }

    var country = document.forms["myForm"]["country"].value;
    if(country==""){
      window.alert("Problem with Country Name! Please correct");
      return false;
    }

    var zip = document.forms["myForm"]["zip"].value;
    if(zip==""){
      window.alert("Problem with Zip Code! Please correct");
      return false;
    }
    document.getElementByName("myForm").submit();
}
</script>

<script type="text/javascript" src="app/view/js/main.js"></script>

</body>
</html>