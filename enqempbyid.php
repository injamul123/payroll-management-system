<?php 
$empid=trim($_GET["x"]);
echo $empid;
include("dbconnect.php");
	  $rs=mysqli_query($con,"select * from empinfo where empid='$empid'");
	  while($row=mysqli_fetch_object($rs))
	  {
	         echo"<form name='form1' method='post' action=''>
  <table width='31%' align='center' border='0'>
    <tr>
      <td width='49%'>Employee ID </td>
      <td width='51%'>&nbsp;$row->Emp_id</td>
    </tr>
    <tr>
      <td>Name</td>
      <td>&nbsp;$row->EmpName</td>
    </tr>
    <tr>
      <td>Designation</td>
      <td>&nbsp;$row->Designation</td>
    </tr>
    <tr>
      <td>Grade</td>
      <td>&nbsp;$row->EmpGrade</td>
    </tr>
    <tr>
      <td>Department Name </td>
      <td>&nbsp;$row->DeptName</td>
    </tr>
    <tr>
      <td>Date of joining </td>
      <td>&nbsp;$row->Doj</td>
    </tr>
    <tr>
      <td>Date of Birth </td>
      <td>&nbsp;$row->Dob</td>
    </tr>
    <tr>
      <td>Communication Address </td>
      <td>&nbsp;$row->commadd</td>
    </tr>
    <tr>
      <td>E_mail</td>
      <td>&nbsp;$row->E_mail</td>
    </tr>
    <tr>
      <td>Organization</td>
      <td>&nbsp;$row->emporg</td>
    </tr>
    <tr>
      <td>Basic Pay </td>
      <td>&nbsp;$row->basicpay</td>
    </tr>
    <tr>
      <td>Date of retirement </td>
      <td>&nbsp;$row->dor</td>
    </tr>
    <tr>
      <td>Caste</td>
      <td>&nbsp;$row->empcaste</td>
    </tr>
    <tr>
      <td>Phone No </td>
      <td>&nbsp;$row->empphone</td>
    </tr>
    <tr>
      <td>Age</td>
      <td>&nbsp;$row->empage</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>&nbsp;$row->gender</td>
    </tr>
    <tr>
      <td>Mother Name </td>
      <td>&nbsp;$row->mname</td>
    </tr>
    <tr>
      <td>Father Name </td>
      <td>&nbsp;$row->fname</td>
    </tr>
    <tr>
      <td>Permanent Address </td>
      <td>&nbsp;$row->pempadd</td>
    </tr>
    <tr>
      <td>Status of employee </td>
      <td>&nbsp;$row->empstat</td>
    </tr>
    <tr>
      <td>Grade Pay </td>
      <td>&nbsp;$row->egradepay</td>
    </tr>
  </table>
</form>
";
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
