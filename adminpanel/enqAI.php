<?php
include("dbconnect.php");
$rs=mysqli_query($con,"select * from annualinc");
echo"<form name='form1' method='post' action=''>
  <table width='49%'  border='1'>
    <tr>
      <th scope='col'>Annual increment </th>
    </tr>
    <tr>
      <td>aincrement</td>
    </tr>";
while($row=mysqli_fetch_object($rs))
	{
	echo"<tr>
      <td>&nbsp;$row->aincrement</td>
    </tr>";
	}
	echo"</table>
</form>";
?>
