<?php


if(isset($_SESSION['user_id'])){

      //$id=$_SESSION['id'];
      $user_id=$_SESSION['user_id'];
 echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="app/view/css/header.css">
</head>
<body>
  <div class="top">
    <table>
        <tbody>
            <tr>
                <td width="20%">
                  <div class="header">
                      <div> &nbsp; Slipstream<span>HRM</span></div>
                  </div>
                </td>
                <td width="80%">
                  <div class="top_navigation">
                      <a href="/Slipstream_HRM_System/?admin_home_logout"><img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Logout_Icon.png" align="center"> &nbsp; Logout </a>
                      <a href="/Slipstream_HRM_System/?admin_home_password&user_id='."$user_id".'"><img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Settings_Icon.png" align="center"> &nbsp; Change Password</a>
                      <a href="/Slipstream_HRM_System/?admin_home_profile&user_id='."$user_id".'"><img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/About_Icon.png" align="center"> &nbsp' ."$_SESSION[name]".'</a>
                      <a href="/Slipstream_HRM_System/?admin_home_show"><img src="http://localhost/Slipstream_HRM_System/app/view/Images/App_Theme/Admin_Icon.png" align="center"> &nbsp; Home</a>
                  </div>
                </td>
            </tr>
        </tbody>  
    </table>
  </div>
</body>
</html>';
}

?>