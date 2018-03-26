<?php
include("dbconnect.php");
if(isset($_POST["Submit"]))
{    
     $DeptName=$_POST["DeptName"];
	$rs=mysqli_query($con,"select * from empinfo where DeptName='$DeptName'");
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
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="">
  Enter the Department Name 
  <select name="DeptName" id="DeptName">
   <?php 
			include("dbconnect.php");
			$rs=mysqli_query($con,"select deptname from deptinfo order by deptname asc");
			while($row=mysqli_fetch_object($rs))
			{
				echo"<option>$row->deptname</option>";
			}
		
		
		?>
  </select>
  <input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>
