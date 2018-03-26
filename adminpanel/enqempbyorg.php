<?php 
include("dbconnect.php");
echo"<form name='form1' method='post' action=''>
   <table width='30%  border='1'>
     <tr>
       <td width='38%'>Enter Organisation </td>
       
       <td width='62%'>   <input name='emporg' type='text' id='emporg'>
       <input type='submit' name='Submit' value='Submit'></td></tr>
   </table>
 
 </form>
";
if(isset($_POST["Submit"]))
{
   $emporg=$_POST["emporg"];
   $emporg1=strtoupper($emporg);
$rs=mysqli_query($con,"select * from empinfo where emporg='$emporg1'");
echo"<table width='100%'  border='0'bgcolor='#CCFFFF'>
    <tr>
      <td>Employee ID</td>
      <td>Employee Name</td>
      <td>Designation</td>
      <td>Grade</td>
      <td>Department</td>
      <td>Date Of Joining </td>
      <td>Birth Date </td>
      <td>Comm. Address </td>
      <td>E_mail</td>
      <td>Organisation</td>
      <td>Basic Pay </td>
      <td>Date Of Retirement </td>
      <td>Caste</td>
      <td>Phone No </td>
      <td>Age</td>
      <td>Gender</td>
      <td>Mother Name </td>
      <td>Father Name </td>
      <td>Permanent Address </td>
      <td>Status</td>
      <td>Grade Pay </td>
    </tr>";
while($row=mysqli_fetch_object($rs))
{
echo" <tr>
      <td>$row->Emp_id&nbsp;</td>
      <td>$row->EmpName&nbsp;</td>
      <td>$row->Designation&nbsp;</td>
      <td>$row->EmpGrade&nbsp;</td>
      <td>$row->DeptName&nbsp;</td>
      <td>$row->Doj&nbsp;</td>
      <td>$row->Dob&nbsp;</td>
      <td>$row->commadd&nbsp;</td>
      <td>$row->E_mail&nbsp;</td>
      <td>$row->emporg&nbsp;</td>
      <td>$row->basicpay&nbsp;</td>
      <td>$row->dor&nbsp;</td>
      <td>$row->empcaste&nbsp;</td>
      <td>$row->empphone&nbsp;</td>
      <td>$row->empage&nbsp;</td>
      <td>$row->gender&nbsp;</td>
      <td>$row->mname&nbsp;</td>
      <td>$row->fname&nbsp;</td>
      <td>$row->pempadd&nbsp;</td>
      <td>$row->empstat&nbsp;</td>
      <td>$row->egradepay&nbsp;</td>
    </tr>";
}
echo"</table>";
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
