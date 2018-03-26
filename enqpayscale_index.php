<?php
include("header.php");
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
    </tr>";
while($row=mysqli_fetch_object($rs))
{
     echo"<tr>
      <td>&nbsp;$row->startbasic</td>
      <td>&nbsp;$row->endbasic</td>
      <td>&nbsp;$row->gradepay</td>
    </tr>"; 
}
echo"</table>
</form>";
include("footer.php");
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
      <th colspan="3" scope="col">Payscale</th>
    </tr>
    <tr>
      <td>Start basic </td>
      <td>End basic </td>
      <td>Grade pay </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>

