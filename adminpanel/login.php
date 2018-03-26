<?php
session_start();
include("dbconnect.php");
if(isset($_POST["login"]))
{
        $empid=trim($_POST["empid"]);
		$pwd=trim($_POST["pwd"]);

		$rs=mysqli_query($con,"select * from adminlogin where empid='$empid' and pwd='$pwd'");
		if(mysqli_num_rows($rs)>0)
		{
		       header('Location: paneladmin.php');
			   $_SESSION["empid"]=$empid;
		}
		else
		{
		       echo"Invalid user name or password";
		}
}
?>













<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="331" border="1" align="center">
    <tr>
      <td width="97"><div align="center">User Name </div></td>
      <td width="218">
        <div align="center">
          <input name="empid" type="text" id="empid">
        </div></td>
    </tr>
    <tr>
      <td><div align="center">Password</div></td>
      <td><div align="center">
        <input name="pwd" type="text" id="pwd">
      </div></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input name="login" type="submit" id="login" value="Login">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
