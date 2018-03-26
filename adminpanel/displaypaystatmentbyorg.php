<?php
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $emporg=$_POST["emporg"];
	$rs=mysqli_query($con,"select * from salary where emporg='$emporg'");
	echo"<form name='form1' method='post' action=''>
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width='86%' height='68'  border='1'>
    <tr>
      <th scope='col'>Paystatment no </th>
      <th scope='col'>Pdate </th>
      <th scope='col'>pmonth</th>
      <th scope='col'>Pyear</th>
      <th scope='col'>Pempid</th>
      <th scope='col'>Pempname</th>
      <th scope='col'>Deptname</th>
      <th scope='col'>empgrade</th>
      <th scope='col'>Basicpay</th>
      <th scope='col'>gradepay</th>
      <th scope='col'>DA</th>
      <th scope='col'>HRA</th>
      <th scope='col'>MA</th>
      <th scope='col'>Total earning </th>
      <th scope='col'>Grosspay</th>
      <th scope='col'>NPS</th>
      <th scope='col'>Ptax</th>
      <th scope='col'>GIS</th>
      <th scope='col'>NETPAY</th>
    </tr>";
	while($row=mysqli_fetch_object($rs))
	{
	  
     echo"<tr>
      <td>&nbsp;$row->pstatno</td>
      <td>&nbsp;$row->pdate</td>
      <td>&nbsp;$row->pmonth</td>
      <td>&nbsp;$row->pyear</td>
      <td>&nbsp;$row->pempid</td>
      <td>&nbsp;$row->pempname</td>
      <td>&nbsp;$row->pdeptname</td>
      <td>&nbsp;$row->pempgrade</td>
      <td>&nbsp;$row->basicpay</td>
      <td>&nbsp;$row->gradepay</td>
      <td>&nbsp;$row->pda</td>
      <td>&nbsp;$row->phra</td>
      <td>&nbsp;$row->pma</td>
      <td>&nbsp;$row->totalearning</td>
      <td>&nbsp;$row->grosspay</td>
      <td>&nbsp;$row->pnps</td>
      <td>&nbsp;$row->ptax</td>
      <td>&nbsp;$row->pgis</td>
      <td>&nbsp;$row->pnetpay</td>
    </tr>";
}
echo"<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;$netsum</td>
    </tr>";
echo"</table>
</form>";
}
?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
Enter the organisation
<select name="emporg" id="emporg">
  <option>A1</option>
  <option>A2</option>
  <option>B1</option>
</select>
<input type="submit" name="Submit" value="Submit">
</body>
</html>
