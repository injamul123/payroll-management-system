<?php
include("header.php");
include("dbconnect.php");
$rs=mysqli_query($con,"select * from deptinfo order by deptname asc");
echo"<br><br><form name='form1' method='post' action=''>
  <table width='80%'  border='1'>
    <tr>
      <th colspan='7' scope='col'>Dept information</th>
    </tr>
    <tr>
      <td>Dept Name </td>
      <td>Deot Add </td>
      <td>Dept contact </td>
      <td>Dept email </td>
      <td>Dept website </td>
      <td>total employee </td>
      <td>total organization </td>
    </tr>";
while($row=mysqli_fetch_object($rs))
	{
	echo" <tr>
      <td>&nbsp;$row->deptname</td>
      <td>&nbsp$row->deptadd;</td>
      <td>&nbsp;$row->dcontact</td>
      <td>&nbsp;$row->demail</td>
      <td>&nbsp;$row->deptweb</td>
      <td>&nbsp;$row->temp</td>
      <td>&nbsp;$row->torg</td>
    </tr>";
}
echo"</table>
</form>";
include("footer.php");
?>
