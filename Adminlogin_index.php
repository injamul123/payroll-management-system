<?php 
include("header.php");
 include("adminpanel/dbconnect.php");
 session_start();
 if(isset($_POST["Login"]))
 {
       $empid=$_POST["empid"];
	   $pwd=$_POST["pwd"];
	   $rs=mysqli_query($con,"select * from adminlogin where empid='$empid' and pwd='$pwd'");
	   if(mysqli_num_rows($rs)>0)
	   {
	       header('Location:adminpanel/paneladmin.php');
		   $_SESSION["empid"]=$empid;
	   }
	   else
	   {
	     echo"Invalid username or password";
	   }
	   
}	   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {color: #99CC66; }
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="200" border="0" align="center" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center" class="style2">Admin Login </div></td>
    </tr>
    <tr>
      <td><span class="style2">Emp ID </span></td>
      <td><input name="empid" type="text" id="empid"required placeholder="Enter username"></td>
    </tr>
    <tr>
      <td><span class="style2">Password</span></td>
      <td><input name="pwd" type="password" id="pwd"required placeholder="Enter a valid password"></td>
    </tr>
    <tr>
      <td height="33" colspan="2"><div align="center">
        <input name="Login" type="submit" id="Login" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
