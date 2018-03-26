<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $startbasic=trim($_POST["startbasic"]);
	 $endbasic=trim($_POST["endbasic"]);
     $gradepay=trim($_POST["gradepay"]);
	 $deptname=trim($_POST["deptname"]);
	 $empgrade=trim($_POST["empgrade"]);
	 $rs=mysqli_query($con,"insert into payscale values('$startbasic','$endbasic','$gradepay','$deptname','$empgrade')");
	 if($rs)
	 {
	      echo"<script>alert('saved')</script>";
	 }
	 else
	 {
	      echo"<script>alert('not saved')</script>";
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
  .
    <table width="389" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">Payscale Update </div></td>
    </tr>
    <tr>
      <td><div align="center">Start Basic </div></td>
      <td><div align="center">
        <input name="startbasic" type="text" id="startbasic">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">End Basic </div></td>
      <td><div align="center">
        <input name="endbasic" type="text" id="endbasic">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Grade Pay </div></td>
      <td><div align="center">
        <input name="gradepay" type="text" id="gradepay">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Dept Name </div></td>
      <td><div align="center">
        .
            <select name="deptname" id="deptname">
              <option>select</option>
			  <?php 
			include("dbconnect.php");
			$rs=mysqli_query($con,"select deptname from deptinfo order by deptname asc");
			while($row=mysqli_fetch_object($rs))
			{
				echo"<option>$row->deptname</option>";
			}
		
		
		?>
                </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Emp Grade </div></td>
      <td><div align="center">
        .
            <select name="empgrade" id="empgrade">
              <option>select</option>
              <option>GradeA</option>
              <option>GradeB</option>
              <option>GradeC</option>
              <option>GradeD</option>
              </select>
      </div></td>
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
