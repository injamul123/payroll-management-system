<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $gd1=$_POST["gd1"];
	 $gd2=$_POST["gd2"];
     $gd3=$_POST["gd3"];
	 $gd4=$_POST["gd4"];
	 $rs=mysqli_query($con,"insert into earning values('$da','$hra','$ma')");
	 if($rs)
	 {
	      echo"<script>alert('saved')</script>";
	 }
	 else
	 {
	      echo"<script>alert('not saved')</script>";
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
  <table width="389" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">Dearness Allowance </div></td>
      <td><div align="center">
        <input name="da" type="text" id="da">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">House Rent Allowance </div></td>
      <td><div align="center">
        <input name="hra" type="text" id="hra">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Medical Allowance </div></td>
      <td><div align="center">
        <input name="ma" type="text" id="ma">
      </div></td>
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
