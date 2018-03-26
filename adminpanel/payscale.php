<?php
 include("dbconnect.php");
  if(isset($_POST["Submit"]))
  {
     $startbasic=trim($_POST["startbasic"]);
	 $endbasic=trim($_POST["endbasic"]);
	 $gradepay=trim($_POST["gradepay"]);
	 $deptname=trim($_POST["DeptName"]);
	 $empgrade=trim($_POST["EmpGrade"]);
	 $rs=mysqli_query($con,"insert into payscale value('$startbasic','$endbasic','$gradepay','$deptname',' $empgrade')");
	 if($rs)
	 {
	   echo"<script>alert('saved')</script>";
	  }
	  else
	  {
	   echo"<script>alert('Not saved')</script>";
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
  <table width="329" border="0" align="center" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center"><strong>Payscale</strong></div></td>
    </tr>
    <tr>
      <td width="92">Start Basic </td>
      <td width="212">        <input name="startbasic" type="number" id="startbasic"required placeholder="Enter start basic">      </td>
    </tr>
    <tr>
      <td>End Basic </td>
      <td>        <input name="endbasic" type="number" id="endbasic"required placeholder="Enter end basic">      </td>
    </tr>
    <tr>
      <td>GradePay</td>
      <td><input name="gradepay" type="number" id="gradepay"required placeholder="Enter gradepay"></td>
    </tr>
    <tr>
      <td>Dept Name </td>
      <td>        <select name="DeptName" id="DeptName">
        <option>Select</option>
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
      <td>EmpGrade</td>
      <td>        <select name="EmpGrade" id="EmpGrade">
        <option>select</option>
        <option>GradeA</option>
        <option>GradeB</option>
        <option>GradeC</option>
        <option>GradeD</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="Submit" value="Submit">
          </div></td></tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
</body>
</html>
