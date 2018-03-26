<?php
include("header.php");
include("dbconnect.php");
$rs=mysqli_query($con,"select * from earning");
echo"<form name='form1' method='post' action=''>
  <table width='80%'  border='1'>
    <tr>
      <th colspan='3' scope='col'>Earnings</th>
    </tr>
    <tr>
      <td>DA</td>
      <td>HRA</td>
      <td>MA</td>
    </tr>";
while($row=mysqli_fetch_object($rs))
	{
	echo"<tr>
      <td>&nbsp;$row->da</td>
      <td>&nbsp;$row->hra</td>
      <td>&nbsp;$row->ma</td>
    </tr>";
}	
	echo"  </table>
</form>";
include("footer.php");
?>
