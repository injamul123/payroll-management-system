<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $Emp_id=$_POST["Emp_id"];
	 $EmpName=$_POST["EmpName"];
     $date=$_POST["date"];
	 $time=$_POST["time"];
	  $rs=mysqli_query($con,"insert into attendance value ('$Emp_id','$EmpName','$date','$time')");
   if($rs)
   {
    echo "<script>alert('saved')</script>";
   }
   else
   {
    echo "<script>alert('not saved')</script>";
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
  <table width="80%"  border="1">
    <tr>
      <th colspan="2" scope="col">Attendance</th>
    </tr>
    <tr>
      <td>Enter Employee Id </td>
      <td><input name="Emp_id" type="text" id="Emp_id"></td>
    </tr>
    <tr>
      <td>Employee Name </td>
      <td><input name="EmpName" type="text" id="EmpName"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="date" id="date"></td>
    </tr>
    <tr>
      <td>Entry Time </td>
      <td><input name="time" type="time" id="time"></td>
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
