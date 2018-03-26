<?php
include("dbconnect.php");
  if(isset($_POST["Submit"]))
  {
  $aincrement=$_POST["aincrement"];
  $rs=mysqli_query($con,"insert into annualinc value ('$aincrement')");
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
  <table width="360" border="0" align="center" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center"><strong>Annual increment Table </strong></div></td>
    </tr>
    <tr>
      <td width="125">Annual increment </td>
      <td width="219"><input name="aincrement" type="number" id="aincrement"required placeholder="enter annual increment"></td>
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
