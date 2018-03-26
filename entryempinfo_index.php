
<?php 
include("adminpanel/dbconnect.php");
if(isset($_POST["Submit"]))
{
     $Emp_id=$_POST["Emp_id"];
	 $EmpName=$_POST["EmpName"];
     $Designation=$_POST["Designation"];
	 $EmpGrade=$_POST["EmpGrade"];
	 $DeptName=$_POST["DeptName"];
	 $Doj=$_POST["Doj"];
	 $Dob=$_POST["Dob"];
	 $commadd=$_POST["commadd"];
	 $E_mail=$_POST["E_mail"];
	 $emporg=$_POST["emporg"];
	 $dor=$_POST["dor"];
	 $empcaste=$_POST["empcaste"];
	 $empphone=$_POST["empphone"];
	 $empage=$_POST["empage"];
	 $gender=$_POST["gender"];
	 $mname=$_POST["mname"];
	 $fname=$_POST["fname"];
	 $pempadd=$_POST["pempadd"];
	 $empstat=$_POST["empstat"];
	 $egradepay=0;
	 $basicpay=0;
	 $rs1=mysqli_query($con,"select * from payscale where empgrade='$EmpGrade' and deptname='$DeptName'");
	 if(mysqli_num_rows($rs1)>0)
	 {
	       if($row1=mysqli_fetch_object($rs1))
		   {
	         $egradepay=$row1->gradepay;
			 $basicpay=$row1->startbasic;
			 }
			 
	 }
	 else
	 {
	     echo"no record,because invalid payscale";
	 }
	 $rs=mysqli_query($con,"insert into empinfo values('$Emp_id','$EmpName','$Designation','$EmpGrade','$DeptName','$Doj','$Dob','$commadd','$E_mail','$emporg','$basicpay','$dor','$empcaste','$empphone','$empage','$gender','$mname','$fname','$pempadd','$empstat','$egradepay')");
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
  <table width="442" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">Employee Information </div></td>
    </tr>
    <tr>
      <td width="226"><div align="center">Employee Id </div></td>
      <td width="200"><div align="center">
        <input name="Emp_id" type="text" id="Emp_id">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employee Name </div></td>
      <td><div align="center">
        <input name="EmpName" type="text" id="EmpName">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Designation</div></td>
      <td><div align="center">
        <input name="Designation" type="text" id="Designation">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employeee Grade </div></td>
      <td><div align="center">
        .
          <select name="EmpGrade" id="EmpGrade">
            <option>select</option>
              <option>GradeA</option>
              <option>GradeB</option>
              <option>GradeC</option>
              <option>GradeD</option>
              </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Department Name </div></td>
      <td><div align="center">
        .
          <select name="DeptName" id="DeptName">
              <option>select</option>
			  <?php 
			include("adminpanel/dbconnect.php");
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
      <td><div align="center">Date of Joining </div></td>
      <td><div align="center">
        <input name="Doj" type="date" id="Doj">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Date of Birth </div></td>
      <td><div align="center">
        <input name="Dob" type="date" id="Dob">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Communication Address </div></td>
      <td><div align="center">
        <input name="commadd" type="text" id="commadd">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">E_mail</div></td>
      <td><div align="center">
        <input name="E_mail" type="text" id="E_mail">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employee's Organisation </div></td>
      <td><div align="center">
        <input name="emporg" type="text" id="emporg">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Date of Retirement </div></td>
      <td><div align="center">
        <input name="dor" type="date" id="dor">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employee Caste </div></td>
      <td><div align="center">
        <input name="empcaste" type="text" id="empcaste">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employee Phone </div></td>
      <td><div align="center">
        <input name="empphone" type="text" id="empphone">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employee Age </div></td>
      <td><div align="center">
        <input name="empage" type="text" id="empage">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Gender</div></td>
      <td><div align="center">
        <input name="gender" type="radio" value="Male">
      Male 
      <input name="gender" type="radio" value="Female">
      Female</div></td>
    </tr>
    <tr>
      <td><div align="center">Mother's Name </div></td>
      <td><div align="center">
        <input name="mname" type="text" id="mname">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Father's Name </div></td>
      <td><div align="center">
        <input name="fname" type="text" id="fname">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Permanent Address </div></td>
      <td><div align="center">
        <input name="pempadd" type="text" id="pempadd">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Employee Status</div></td>
      <td><div align="center">
        <input name="empstat" type="text" id="empstat">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit" type="submit" id="Submit" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
