<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $deptname=$_POST["deptname"];
	 $deptadd=$_POST["deptadd"];
     $dcontact=$_POST["dcontact"];
	 $demail=$_POST["demail"];
	 $deptweb=$_POST["deptweb"];
	 $temp=$_POST["temp"];
	 $torg=$_POST["torg"];
	 $rs=mysqli_query($con,"insert into deptinfo values('$deptname','$deptadd','$dcontact','$demail','$deptweb','$temp','$torg')");
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
      <td colspan="2"><div align="center">Depart Information </div></td>
    </tr>
    <tr>
      <td><div align="center">Department Name </div></td>
      <td><div align="center">
        <input name="deptname" type="text" id="deptname">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Department Address </div></td>
      <td><div align="center">
        <input name="deptadd" type="text" id="deptadd">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Department contact </div></td>
      <td><div align="center">
        <input name="dcontact" type="text" id="dcontact">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Department E_mail </div></td>
      <td><div align="center">
        <input name="demail" type="text" id="demail">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Department website </div></td>
      <td><div align="center">
        <input name="deptweb" type="text" id="deptweb">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Total Employee </div></td>
      <td><div align="center">
        <input name="temp" type="text" id="temp">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Total Organisation </div></td>
      <td><div align="center">
        <input name="torg" type="text" id="torg">
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
