<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $nps=$_POST["nps"];
	 $rs=mysqli_query($con,"insert into deduction values('$nps')");
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
      <td colspan="2"><div align="center"> Deduction Update </div></td>
    </tr>
    <tr>
      <td><div align="center">New Pension Scheme </div></td>
      <td><div align="center">
        <input name="nps" type="text" id="nps">
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
