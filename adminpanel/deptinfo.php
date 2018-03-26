<?php
 include("dbconnect.php");
 if(isset($_POST["Submit"]))
 {
     $deptname=trim($_POST["deptname"]);
	 $deptadd=trim($_POST["deptadd"]);
	 $dcontact=trim($_POST["dcontact"]);
	 $demail=trim($_POST["demail"]);
	 $deptweb=trim($_POST["deptweb"]);
	 $temp=trim($_POST["temp"]);
	 $torg=trim($_POST["torg"]);
	 $rs=mysqli_query($con,"insert into deptinfo value('$deptname','$deptadd','$dcontact','$demail','$deptweb','$temp','$torg')");
	 if($rs)
     {
	    echo"<script>alert('saved')</script>";
	}
	else
	{
	  echo" script alert('Not saved')</script>";
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
  <table width="389" border="0" align="center" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center"><strong>Depart Information </strong></div></td>
    </tr>
    <tr>
      <td>Department Name </td>
      <td><input name="deptname" type="text" id="deptname"required placeholder="Department Name"></td>
    </tr>
    <tr>
      <td>Department Address </td>
      <td><input name="deptadd" type="text" id="deptadd"required placeholder="Dept Add"></td>
    </tr>
    <tr>
      <td>Department contact </td>
      <td><input name="dcontact" type="number" id="dcontact"required placeholder="contact"></td>
    </tr>
    <tr>
      <td>Department E_mail </td>
      <td><input name="demail" type="email" id="demail"required placeholder="Email"></td>
    </tr>
    <tr>
      <td>Department website </td>
      <td><input name="deptweb" type="text" id="deptweb"required placeholder="website"></td>
    </tr>
    <tr>
      <td>Total Employee </td>
      <td><input name="temp" type="number" id="temp"required placeholder="total emp"></td>
    </tr>
    <tr>
      <td>Total Organisation </td>
      <td><input name="torg" type="number" id="torg"required placeholder="total org"></td>
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
