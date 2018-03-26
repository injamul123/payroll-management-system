<?php
include("dbconnect.php");
echo"<form name='form1' method='post' action=''>
  <p align='center'>Enter employee ID
    <input name='Emp_id' type='text' id='Emp_id'> 
    <input type='submit' name='Submit' value='Submit'>
    <input name='Display_All' type='submit' id='Display_All' value='Display All'>
  </p>
  
  <p>&nbsp;  </p>
</form>";
if(isset($_POST["Submit"]))
{
	$Emp_id=$_POST["Emp_id"];
	$rs=mysqli_query($con,"select * from empinfo where Emp_id='$Emp_id'");
	if(mysqli_num_rows($rs)>0)
	{
 		while($row=mysqli_fetch_object($rs))
		{
 		 echo"<table width='50%' height='544'  border='0' align='center'bgcolor='#CCFFFF'>
    <tr>
      <th width='50%' scope='col'><div align='left'><strong>Employee id</strong></div></th>
      <th width='50%' scope='col'>&nbsp;$row->Emp_id</th>
    </tr>
    <tr>
      <td><div align='left'><strong>Employee Name</strong></div></td>
      <td>&nbsp;$row->EmpName</td>
    </tr>
    <tr>
      <td><div align='left'><strong>Designation</strong></div></td>
      <td>&nbsp;$row->Designation</td>
    </tr>
    <tr>
      <td><div align='left'><strong>Employee Grade </strong></div></td>
      <td>&nbsp;$row->EmpGrade</td>
    </tr>
    <tr>
      <td><div align='left'><strong>Department name </strong></div></td>
      <td>&nbsp;$row->DeptName</td>
    </tr>
    <tr>
      <td><strong>Date of joining </strong></td>
      <td>&nbsp;$row->Doj</td>
    </tr>
    <tr>
      <td><strong>Date of Birth</strong></td>
      <td>&nbsp;$row->Dob</td>
    </tr>
    <tr>
      <td><strong>communication Address </strong></td>
      <td>&nbsp;$row->commadd</td>
    </tr>
    <tr>
      <td><strong>E_mail</strong></td>
      <td>&nbsp;$row->E_mail</td>
    </tr>
    <tr>
      <td><strong>Employee Organization </strong></td>
      <td>&nbsp;$row->emporg</td>
    </tr>
    <tr>
      <td><strong>Basic pay </strong></td>
      <td>&nbsp;$row->basicpay</td>
    </tr>
    <tr>
      <td><strong>Date of retiring </strong></td>
      <td>&nbsp;$row->dor</td>
    </tr>
    <tr>
      <td><strong>Employee caste </strong></td>
      <td>&nbsp;$row->empcaste</td>
    </tr>
    <tr>
      <td><strong>Empoyee phone </strong></td>
      <td>&nbsp;$row->empphone</td>
    </tr>
    <tr>
      <td><strong>Employee Age </strong></td>
      <td>&nbsp;$row->empage</td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
      <td>&nbsp;$row->gender</td>
    </tr>
    <tr>
      <td><strong>Mother's Name </strong></td>
      <td>&nbsp;$row->mname</td>
    </tr>
    <tr>
      <td><strong>father's Name </strong></td>
      <td>&nbsp;$row->fname</td>
    </tr>
    <tr>
      <td><strong>Parmanent Employee Address </strong></td>
      <td>&nbsp;$row->pempadd</td>
    </tr>
    <tr>
      <td><strong>Employee status </strong></td>
      <td>&nbsp;$row->empstat</td>
    </tr>
    <tr>
      <td><strong>Employee Gradepay </strong></td>
      <td>&nbsp;$row->egradepay</td>
    </tr>
  </table> ";
 	}
   }
   else
   {
   		echo"<script>alert('Not match')</script>";
   }
 }
 if(isset($_POST["Display_All"]))
{
	$rs=mysqli_query($con,"select * from empinfo");
 	while($row=mysqli_fetch_object($rs))
	{
 		 echo"<table width='50%' height='544'  border='1' align='center'>
    <tr>
      <th width='50%' scope='col'><div align='left'><strong>Employee id</strong></div></th>
      <th width='50%' scope='col'>&nbsp;$row->Emp_id</th>
    </tr>
    <tr>
      <td><div align='left'><strong>Employee Name</strong></div></td>
      <td>&nbsp;$row->EmpName</td>
    </tr>
    <tr>
      <td><div align='left'><strong>Designation</strong></div></td>
      <td>&nbsp;$row->Designation</td>
    </tr>
    <tr>
      <td><div align='left'><strong>Employee Grade </strong></div></td>
      <td>&nbsp;$row->EmpGrade</td>
    </tr>
    <tr>
      <td><div align='left'><strong>Department name </strong></div></td>
      <td>&nbsp;$row->DeptName</td>
    </tr>
    <tr>
      <td><strong>Date of joining </strong></td>
      <td>&nbsp;$row->Doj</td>
    </tr>
    <tr>
      <td><strong>Date of Birth</strong></td>
      <td>&nbsp;$row->Dob</td>
    </tr>
    <tr>
      <td><strong>communication Address </strong></td>
      <td>&nbsp;$row->commadd</td>
    </tr>
    <tr>
      <td><strong>E_mail</strong></td>
      <td>&nbsp;$row->E_mail</td>
    </tr>
    <tr>
      <td><strong>Employee Organization </strong></td>
      <td>&nbsp;$row->emporg</td>
    </tr>
    <tr>
      <td><strong>Basic pay </strong></td>
      <td>&nbsp;$row->basicpay</td>
    </tr>
    <tr>
      <td><strong>Date of retiring </strong></td>
      <td>&nbsp;$row->dor</td>
    </tr>
    <tr>
      <td><strong>Employee caste </strong></td>
      <td>&nbsp;$row->empcaste</td>
    </tr>
    <tr>
      <td><strong>Empoyee phone </strong></td>
      <td>&nbsp;$row->empphone</td>
    </tr>
    <tr>
      <td><strong>Employee Age </strong></td>
      <td>&nbsp;$row->empage</td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
      <td>&nbsp;$row->gender</td>
    </tr>
    <tr>
      <td><strong>Mother's Name </strong></td>
      <td>&nbsp;$row->mname</td>
    </tr>
    <tr>
      <td><strong>father's Name </strong></td>
      <td>&nbsp;$row->fname</td>
    </tr>
    <tr>
      <td><strong>Parmanent Employee Address </strong></td>
      <td>&nbsp;$row->pempadd</td>
    </tr>
    <tr>
      <td><strong>Employee status </strong></td>
      <td>&nbsp;$row->empstat</td>
    </tr>
    <tr>
      <td><strong>Employee Gradepay </strong></td>
      <td>&nbsp;$row->egradepay</td>
    </tr>
  </table> ";
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
