<?php
include("dbconnect.php");
$rs=mysqli_query($con,"select * from payscale");
echo"<form name='form1' method='post' action=''>
  <table width='80%'  border='1'>
    <tr>
      <th colspan='3' scope='col'>Payscale</th>
    </tr>
    <tr>
      <td>Start basic </td>
      <td>End basic </td>
      <td>Grade pay </td>
	   <td>Deptname </td>
	    <td>EmpGrade </td>
    </tr>";
while($row=mysqli_fetch_object($rs))
{
     echo"<tr>
      <td>&nbsp;$row->startbasic</td>
      <td>&nbsp;$row->endbasic</td>
      <td>&nbsp;$row->gradepay</td>
	     <td>&nbsp;$row->deptname</td>
		  <td>&nbsp;$row->empgrade</td>
    </tr>"; 
}
echo"</table>
</form>";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>

</form>
</body>
</html>

