 
<?php 
include("dbconnect.php");
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
	 $pwd=(trim($_POST["pwd"]));
	 $egradepay=0;
	 $basicpay=0;                                                                                      //Php var dec
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
	 $rs=mysqli_query($con,"insert into empinfo value('$Emp_id','$EmpName','$Designation','$EmpGrade','$DeptName','$Doj','$Dob','$commadd','$E_mail','$emporg','$basicpay','$dor','$empcaste','$empphone','$empage','$gender','$mname','$fname','$pempadd','$empstat','$egradepay','$pwd')");
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
  <table width="619" border="0" align="center" bordercolor="#0C8850" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center"><strong>Employee Information </strong></div></td>
    </tr>
    <tr>
      <td width="276"> Emp id</td>
      <td width="327">        <input name="Emp_id"  type="text" id="Emp_id" required placeholder="emp Id"></td>
    </tr>
    <tr>
      <td>Emp Name </td>
      <td><input name="EmpName" type="text" id="EmpName"required placeholder="Employee name"></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input name="Designation" type="text" id="Designation"required placeholder="Designation"></td>
    </tr>
    <tr>
      <td>Empgrade</td>
      <td>        <select name="EmpGrade" id="EmpGrade">
        <option>select</option>
        <option>GradeA</option>
        <option>GradeB</option>
        <option>GradeC</option>
        <option>GradeD</option>
                  </select></td>
    </tr>
    <tr>
      <td>DeptName</td>
      <td> <select name="DeptName" id="DeptName"required placeholder="Dept">
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
      <td>DOJ</td>
      <td><input name="Doj" type="date" id="Doj"required placeholder="Date of joining"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="Dob" type="date" id="Dob"required placeholder="Date of birth"></td>
    </tr>
    <tr>
      <td>Communication Add </td>
      <td><textarea name="textarea"></textarea></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="E_mail" type="email" id="E_mail"required placeholder="Enter a valid email"></td>
    </tr>
    <tr>
      <td>Emporg</td>
      <td><input name="emporg" type="text" id="emporg"required placeholder="emp org"></td>
    </tr>
    <tr>
      <td>DOR</td>
      <td><input name="dor" type="date" id="dor"required placeholder="date of retirement"></td>
    </tr>
    <tr>
      <td>Empcaste</td>
      <td><input name="empcaste" type="text" id="empcaste"required placeholder="caste"></td>
    </tr>
    <tr>
      <td height="47">Empphone</td>
      <td><input name="empphone" type="number" id="empphone"required placeholder="Enter a valid ph no"></td>
    </tr>
    <tr>
      <td>Empage</td>
      <td><input name="empage" type="number" id="empage"required placeholder="Age">      </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male">
        MALE 
          <input name="gender" type="radio" value="female">
        FEMALE</td>
    </tr>
    <tr>
      <td>Mname </td>
      <td><input name="mname" type="text" id="mname"required placeholder="Mothers name"></td>
    </tr>
    <tr>
      <td>Fname</td>
      <td><input name="fname" type="text" id="fname"required placeholder="Fathers name"></td>
    </tr>
    <tr>
      <td>EmployeeAdd</td>
      <td><input name="pempadd" type="text" id="pempadd"required placeholder="permanent add"></td>
    </tr>
    <tr>
      <td>Empstatment</td>
      <td><input name="empstat" type="text" id="empstat"required placeholder="emp statment"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input name="pwd" type="text" id="pwd"required placeholder="password"></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="Submit" value="Submit">
        </div></td></tr>
  </table>
  <div align="center"></div>
</form>
</body>
</html>
