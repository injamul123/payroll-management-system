<?php
include("dbconnect.php");
 $Emp_id="";
	 $EmpName="";
     $Designation="";
	 $EmpGrade="";
	 $DeptName="";
	 $Doj="";
	 $Dob="";
	 $commadd="";
	 $E_mail="";
	 $emporg="";
	 $dor="";
	 $empcaste="";
	 $empphone="";
     $empage="";
     $gender="";
     $mname="";
     $fname="";
     $pempadd="";
     $empstat="";
	 $my="";
	 if(isset($_POST['delete']))
{
   $Emp_id=$_POST['Emp_id'];
   if($Emp_id!="")
   {
   $rs=mysqli_query($con,"delete from empinfo where Emp_id='$Emp_id'");
     if($rs)
	{
	 echo"<script>alert('deleted')</script>"; 
	}
	else
	{
	$my="unable to delete";
	}
	}
	else
	{
	$my="To delete enter Product Name first";
	}
   
}
if(isset($_POST["show"]))
{
	$Emp_id=$_POST["Emp_id"];
	$rs=mysqli_query($con,"select * from empinfo where Emp_id='$Emp_id'");
	if($row=mysqli_fetch_object($rs))
	{
		$EmpName=$row->EmpName;
     $Designation=$row->Designation;
	 $EmpGrade=$row->EmpGrade;
	 $DeptName=$row->DeptName;
	 $Doj=$row->Doj;
	 $Dob=$row->Dob;
	 $commadd=$row->commadd;
	 $E_mail=$row->E_mail;
	 $emporg=$row->emporg;
	 $dor=$row->dor;
	 $empcaste=$row->empcaste;
	 $empphone=$row->empphone;
     $empage=$row->empage;
     $gender=$row->gender;
     $mname=$row->mname;
     $fname=$row->fname;
     $pempadd=$row->pempadd;
     $empstat=$row->empstat;
	}
}
if(isset($_POST["update"]))
{
 $Emp_id=$_POST['Emp_id'];
   if($Emp_id!="")
  {
  $EmpName=$_POST['EmpName'];
     $Designation=$_POST['Designation'];
	 $EmpGrade=$_POST['EmpGrade'];
	 $DeptName=$_POST['DeptName'];
	 $Doj=$_POST['Doj'];
	 $Dob=$_POST['Dob'];
	 $commadd=$_POST['commadd'];
	 $E_mail=$_POST['E_mail'];
	 $emporg=$_POST['emporg'];
	 $dor=$_POST['dor'];
	 $empcaste=$_POST['empcaste'];
	 $empphone=$_POST['empphone'];
     $empage=$_POST['empage'];
     $gender=$_POST['gender'];
     $mname=$_POST['mname'];
     $fname=$_POST['fname'];
     $pempadd=$_POST['pempadd'];
     $empstat=$_POST['empstat'];

  $rs=mysqli_query($con,"update empinfo set Emp_id='$Emp_id',EmpName='$EmpName',DeptName='$DeptName',Doj='$Doj',Dob='$Dob',commadd='$commadd',E_mail='$E_mail',emporg='$emporg',dor='$dor',empcaste='$empcaste',empphone='$empphone',empage='$empage',gender='$gender',mname='$mname',fname='$fname',pempadd='$pempadd',empstat='$empstat' where Emp_id='$Emp_id'");
   if($rs)
	{
	 echo"<script>alert('updated')</script>"; 
	}
	else
	{
	 $my="unable to updatee";
	 }
	}
	else
	{
	 $my="To update enter product name first";
	}
}
if(isset($_POST["Submit"]))
{
     $Emp_id=$_POST['Emp_id'];
       $EmpName=$_POST['EmpName'];
     $Designation=$_POST['Designation'];
	 $EmpGrade=$_POST['EmpGrade'];
	 $DeptName=$_POST['DeptName'];
	 $Doj=$_POST['Doj'];
	 $Dob=$_POST['Dob'];
	 $commadd=$_POST['commadd'];
	 $E_mail=$_POST['E_mail'];
	 $emporg=$_POST['emporg'];
	 $dor=$_POST['dor'];
	 $empcaste=$_POST['empcaste'];
	 $empphone=$_POST['empphone'];
     $empage=$_POST['empage'];
     $gender=$_POST['gender'];
     $mname=$_POST['mname'];
     $fname=$_POST['fname'];
     $pempadd=$_POST['pempadd'];
     $empstat=$_POST['empstat'];
	$pname=$_POST["pname"];
	$ratee=$_POST["ratee"];
	$qty=$_POST["qty"];
	$pdes=$_POST["pdes"];
	$rs=mysqli_query($con,"insert into empinfo value('$Emp_id','$EmpName','$Designation','$EmpGrade','$DeptName','$Doj','$Dob','$commadd','$E_mail','$emporg','$dor','$empcaste','$empphone','$empage','$gender','$mname','$fname','$pempadd','$empstat'))");
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
  <table width="80%"  border="0" bgcolor="#99FFFF">
    <tr>
      <th colspan="2" scope="col">employee info </th>
    </tr>
    <tr>
      <td width="28%">Employee Id </td>
      <td width="72%"><input name="Emp_id" type="text" id="Emp_id"value="<?php echo $Emp_id; ?>">
      <input name="show" type="submit" id="show" value="Show">
      <input name="update" type="submit" id="update" value="update">    
	  <input name="delete" type="submit" id="delete" value="Delete"></td>
    </tr>
    <tr>
      <td>Emp Name </td>
      <td><input name="EmpName" type="text" id="EmpName"value="<?php echo $EmpName; ?>"></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input name="Designation" type="text" id="Designation"value="<?php echo $Designation; ?>"></td>
    </tr>
    <tr>
      <td>Empgrade</td>
      <td><input name="EmpGrade" type="text" id="EmpGrade"value="<?php echo $EmpGrade; ?>"></td>
    </tr>
    <tr>
      <td>DeptName</td>
      <td><input name="DeptName" type="text" id="DeptName"value="<?php echo $DeptName; ?>"></td>
    </tr>
    <tr>
      <td>DOJ</td>
      <td><input name="Doj" type="text" id="Doj"value="<?php echo $Doj; ?>"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="Dob" type="text" id="Dob"value="<?php echo $Dob; ?>"></td>
    </tr>
    <tr>
      <td>Communication Add </td>
      <td><input name="commadd" type="text" id="commadd"value="<?php echo $commadd; ?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="E_mail" type="text" id="E_mail"value="<?php echo $E_mail; ?>"></td>
    </tr>
    <tr>
      <td>Emporg</td>
      <td><input name="emporg" type="text" id="emporg"value="<?php echo $emporg; ?>"></td>
    </tr>
    <tr>
      <td>DOR</td>
      <td><input name="dor" type="text" id="dor"value="<?php echo $dor; ?>"></td>
    </tr>
    <tr>
      <td>Empcaste</td>
      <td><input name="empcaste" type="text" id="empcaste"value="<?php echo $empcaste; ?>"></td>
    </tr>
    <tr>
      <td>Empphone</td>
      <td><input name="empphone" type="text" id="empphone"value="<?php echo $empphone; ?>"></td>
    </tr>
    <tr>
      <td>Empage</td>
      <td><input name="empage" type="text" id="empage"value="<?php echo $empage; ?>"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="text" id="gender"value="<?php echo $gender; ?>"></td>
    </tr>
    <tr>
      <td>Mname </td>
      <td><input name="mname" type="text" id="mname"value="<?php echo $mname; ?>"></td>
    </tr>
    <tr>
      <td>Fname</td>
      <td><input name="fname" type="text" id="fname"value="<?php echo $fname; ?>"></td>
    </tr>
    <tr>
      <td>Pempadd</td>
      <td><input name="pempadd" type="text" id="pempadd"value="<?php echo $pempadd; ?>"></td>
    </tr>
    <tr>
      <td>Empstat</td>
      <td><input name="empstat" type="text" id="empstat"value="<?php echo $empstat; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
</body>
</html>
