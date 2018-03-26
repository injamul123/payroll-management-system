<?php
include("header.php");
include("dbconnect.php");
$rs=mysqli_query($con,"select * from deduction");
echo"<form name='form1' method='post' action=''>
  <table width='50%'  border='1' align='center'>
    <tr>
      <th colspan='3' scope='col'>DEDUCTION</th>
    </tr>
    <tr>
      <td>NPS</td>
      <td>GIS</td>
      <td>PTAX</td>
    </tr>";
	while($row=mysqli_fetch_object($rs))
	{
	echo"<tr>
      <td>&nbsp;$row->nps</td>
      <td>&nbsp;$row->gis</td>
      <td>&nbsp;$row->ptax</td>
    </tr>";
}
echo"</table>
</form>";
include("footer.php");
?>
