<?php
include("dbconnect.php");
 if(isset($_POST["Submit"]))
 {
   $da=$_POST["da"];
   $hra=$_POST["hra"];
   $ma=$_POST["ma"];
   $rs=mysqli_query($con,"insert into earning value ('$da','$hra','$ma')");
   if($rs)
   {
    echo "<script>alert('saved')</script>";
   }
   else
   {
    echo "<script>alert('not saved')</script>";
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
  <table width="615" height="202" border="0" align="center" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center"border="1"><strong>Earnings Table </strong></div></td>
    </tr>
    <tr>
      <td>D.A</td>
      <td><input name="da" type="text" id="da"></td>
    </tr>
    <tr>
      <td>H.R.A</td>
      <td><input name="hra" type="text" id="hra"></td>
    </tr>
    <tr>
      <td>M.A</td>
      <td><input name="ma" type="text" id="ma"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
