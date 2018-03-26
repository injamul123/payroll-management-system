 <?php
include("dbconnect.php");
echo"<form name='form1' method='post' action=''>
  <p>Enter the Emp_Id
    <input type='text' name='pempid'>    
    <input type='submit' name='Submit' value='Submit'>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </form>";
if(isset($_POST["Submit"]))
{
 	$pempid=trim($_POST["pempid"]);
	$rs=mysqli_query($con,"select * from salary where pempid='$pempid'");
	if(mysqli_num_rows($rs)>0)
	{
 		while($row=mysqli_fetch_object($rs))
		{
             echo"<table width='80%'  border='0'bgcolor='#CCFFFF'>
    <tr>
      <th width='52%' scope='col'>PayStatment No </th>
      <th width='48%' scope='col'>&nbsp;$row->pstatno</th>
    </tr>
    <tr>
      <td> <div align='center'>Pdate</div></td>
      <td>&nbsp;$row->pdate</td>
    </tr>
    <tr>
      <td><div align='center'>Pmonth</div></td>
      <td>&nbsp;$row->pmonth</td>
    </tr>
    <tr>
      <td><div align='center'>year</div></td>
      <td>&nbsp;$row->pyear</td>
    </tr>
    <tr>
      <td><div align='center'>Pempid</div></td>
      <td>&nbsp;$row->pempid</td>
    </tr>
    <tr>
      <td><div align='center'>Pempname</div></td>
      <td>&nbsp;$row->pempname</td>
    </tr>
    <tr>
      <td><div align='center'>Pdeptname</div></td>
      <td>&nbsp;$row->pdeptname</td>
    </tr>
    <tr>
      <td><div align='center'>pempgrade</div></td>
      <td>&nbsp;$row->pempgrade</td>
    </tr>
    <tr>
      <td><div align='center'>Basicpay</div></td>
      <td>&nbsp;$row->basicpay</td>
    </tr>
    <tr>
      <td><div align='center'>Gradepay</div></td>
      <td>&nbsp;$row->gradepay</td>
    </tr>
    <tr>
      <td><div align='center'>PDA</div></td>
      <td>&nbsp;$row->pda</td>
    </tr>
    <tr>
      <td><div align='center'>PHRA</div></td>
      <td>&nbsp;$row->phra</td>
    </tr>
    <tr>
      <td><div align='center'>PMA</div></td>
      <td>&nbsp;$row->pma</td>
    </tr>
    <tr>
      <td><div align='center'>Totalearning</div></td>
      <td>&nbsp;$row->totalearning</td>
    </tr>
    <tr>
      <td><div align='center'>Grosspay</div></td>
      <td>&nbsp;$row->grosspay</td>
    </tr>
    <tr>
      <td><div align='center'>PNPS</div></td>
      <td>&nbsp;$row->pnps</td>
    </tr>
    <tr>
      <td><div align='center'>PTAX</div></td>
      <td>&nbsp;$row->ptax</td>
    </tr>
    <tr>
      <td><div align='center'>PGIS</div></td>
      <td>&nbsp;$row->pgis</td>
    </tr>
    <tr>
      <td><div align='center'>PNETPAY</div></td>
      <td>&nbsp;$row->pnetpay</td>
    </tr>
  </table>";
    }
   }	
  else
  {
    echo"<script>alert('Not match')</script>";
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

</body>
</html>
