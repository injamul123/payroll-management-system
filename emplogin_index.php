<?php
include("header.php"); 
 include("dbconnect.php");
 session_start();
 if(isset($_POST["Login"]))
 {
       $Emp_id=$_POST["Emp_id"];
	   $pwd=$_POST["pwd"];
	   $rs=mysqli_query($con,"select * from empinfo where Emp_id='$Emp_id' and pwd='$pwd'");
	   if(mysqli_num_rows($rs)>0)
	   {
	       header('Location:emppanel_index.php');
		   $_SESSION["Emp_id"]=$Emp_id;
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
.style3 {color: #993366; }
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="200" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style3">Employee Login </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style3">Emp ID </div></td>
      <td><input name="Emp_id" type="text" id="Emp_id"></td>
    </tr>
    <tr>
      <td><div align="center" class="style3">Password</div></td>
      <td><input name="pwd" type="password" id="pwd"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Login" type="submit" id="Login" value="Submit">
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
</body>
</html>
