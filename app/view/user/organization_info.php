<?php
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
                <input type="text" value="<?= $name; ?>" name="name" size=45 readonly="readonly"/>
             </td>
          </tr>
          <tr align="center">
             <td>
                <font size="4">	Tax ID </font>
             </td>
             <td>
                <input type="text" value="<?= $taxID; ?>" name="taxID" size=45 readonly="readonly"/>
             </td>
          </tr>
          <tr align="center">
             <td>
                <font size="4">	Email </font>
             </td>
             <td>
                <input type="text" value="<?= $email; ?>" name="email" size=45 readonly="readonly"/>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Reg No. </font>
             </td>
             <td>
                <input type="text" value="<?= $reg_Num ?>" name="reg_Num" size=45 readonly="readonly"/>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Phone </font>
             </td>
             <td>
                <input type="text" value="<?= $phone ?>" name="phone" size=45 readonly="readonly"/><br/>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Fax </font>
             </td>
             <td>
                <input type="text" value="<?= $fax ?>" name="fax" size=45 readonly="readonly"/>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	Street </font>
             </td>
             <td>
                <input type="text" value="<?= $street ?>" name="street" size=45 readonly="readonly"/>
             </td>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	City </font>
             </td>
             <td>
                <input type="text" value="<?= $city ?>" name="city" size=45 readonly="readonly"/>
          </tr>

          <tr align="center">
             <td>
                <font size="4">	State </font>
             </td>
             <td>
                <input type="text" value="<?= $state ?>" name="state" size=45 readonly="readonly"/>
             </td>
          </tr>

          <tr align="Country">
             <td>
                <font size="4">	Fax </font>
             </td>
             <td>
                <input type="text" value="<?= $country ?>" name="country" size=45 readonly="readonly"/>
             </td>
          </tr>

          <tr align="ZIP">
             <td>
                <font size="4">	Fax </font>
             </td>
             <td>
                <input type="text" value="<?= $zip ?>" name="zip" size=45 readonly="readonly"/>
             </td>
          </tr>
       </table>
   </center>
</div>
</body>
</html>