<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
   $Emp_id=$_POST["Emp_id"];
	 $EmpName=$_POST["EmpName"];
	 $DeptName=$_POST["DeptName"];
	 $Leavetype=$_POST["Leavetype"];
	 $date=$_POST["date"];
	 $noleave=$_POST["noleave"];
	  $rs=mysqli_query($con,"insert into lve value ('$Emp_id,'$DeptName','$Leavetype','$date','$noleave')");
   if($rs)
   {
    echo "<script>alert('saved')</script>";
   }
   else
   {
    echo "<script>alert('not saved')</script>";
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
  <table width="80%"  border="0" bordercolor="#99FFFF" bgcolor="#99FFFF">
    <tr bgcolor="#FFFFFF">
      <th colspan="2" scope="col">Leave</th>
    </tr>
    <tr>
      <td width="52%">Employee Id </td>
      <td width="48%"><input name="Emp_id" type="text" id="Emp_id"></td>
    </tr>
    <tr>
      <td>Employee Name </td>
      <td><input name="EmpName" type="text" id="EmpName"></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><select name="DeptName" id="DeptName" required>
          <option>select</option>
          <?php 
			include("dbconnect.php");
			$rs=mysqli_query($con,"select deptname from deptinfo order by deptname asc");
			while($row=mysqli_fetch_object($rs))
			{
				echo"<option>$row->deptname</option>";
			}
		
		
		?>
      </select></td>
    </tr>
    <tr>
      <td>Leave type </td>
      <td><select name="Leavetype" id="Leavetype">
          <option>casual leave</option>
          <option>paid leave</option>
          <option>sick leave</option>
      </select></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="date" type="text" id="date"></td>
    </tr>
    <tr>
      <td>No of leave </td>
      <td><input name="noleave" type="text" id="noleave"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>