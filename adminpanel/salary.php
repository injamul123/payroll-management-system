 <?php
include("dbconnect.php");
if(isset($_POST["Generate"]))
{
 	$pempid=trim($_POST["pempid"]);
	$pstatno=1001;
	$rs1=mysqli_query($con,"Select pstatno from salary order by pstatno desc");
	if(mysqli_num_rows($rs1)>0)                                                          //To auto generate bill id
	{
		$row1=mysqli_fetch_object($rs1);
		$pstatno=$row1->pstatno+1;
	}
	
	$pdate=date("Y-m-d");
	$mvalue=substr($pdate,5,2);
	if($mvalue==01)
	{
	  $pmonth="january";
    }
	 else if($mvalue==02)
	 {
	    $pmonth="February";
	 }
	 else if($mvalue==03)
	 {
	    $pmonth="March";
	 }
	 else if($mvalue==04)
	 {
	    $pmonth="April";
	 }
	 else if($mvalue==05)
	 {
	    $pmonth="May";
	 }
	 else if($mvalue==06)
	 {
	    $pmonth="June";
	 }
	 else if($mvalue==07)
	 {
	    $pmonth="July";
	 }
	 else if($mvalue=="08")
	 {
	    $pmonth="August";
	 }
	 else if($mvalue==09)
	 {
	    $pmonth="September";
	 }
	 else if($mvalue==10)
	 {
	    $pmonth="october";
	 }
	 else if($mvalue==11)
	 {
	    $pmonth="November";
	 }
	 else if($mvalue=="12")
	 {
	    $pmonth="December";
	 }
	$pyear=substr($pdate,0,4);
	$rs2=mysqli_query($con,"Select * from empinfo where Emp_id=$pempid");
	if(mysqli_num_rows($rs2)>0)
	{
		$row2=mysqli_fetch_object($rs2);
		$pempname=$row2->EmpName;
		$pdeptname=$row2->DeptName;
		$pEmpGrade=$row2->EmpGrade;
		$basicpay=$row2->basicpay;
		$gradepay=$row2->egradepay;
		$emporg=$row2->emporg;
		
		$rs3=mysqli_query($con,"select * from earning");
		if(mysqli_num_rows($rs3)>0)
		{
		   $row3=mysqli_fetch_object($rs3);
			$pda=$row3->da;
			$phra=$row3->hra;
			$pma=$row3->ma;
			$totalearning=($basicpay+$gradepay)*$pda/100+($basicpay+$gradepay)*$phra/100+$pma;
			$grosspay=$basicpay+$gradepay+$totalearning;
			 
		    $rs4=mysqli_query($con,"select * from deduction");	 
			if(mysqli_num_rows($rs4)>0)
			{
			   
			    $row4=mysqli_fetch_object($rs4);
				$pnps=$row4->nps;
				$pgis=$row4->gis;
				$ptax=$row4->ptax;
				$ppnps=($basicpay+$gradepay)+(($basicpay+$gradepay)*$pda/100)*$pnps/100;
				$totaldeduction=$ppnps+$pgis+$ptax;
				$pnetpay=$grosspay-$totaldeduction;
				$rs=mysqli_query($con,"insert into salary values('$pstatno','$pdate','$pmonth','$pyear','$pempid','$pempname','$pdeptname','$emporg','$pEmpGrade','$basicpay','$gradepay','$pda','$phra','$pma','$totalearning','$grosspay','$pnps','$ptax','$pgis','$pnetpay')");
   				if($rs)
				{
	      			echo"<script>alert('saved')</script>";
	 			}
	 			else
	 			{
	      			echo"<script>alert('not saved')</script>";
	 			}
			
			}
			else
			{
				echo"<script>alert('Invalide deduction')</script>";
			}
		
		}
		else
		{
			echo"<script>alert('Invalide earning')</script>";
		}
		
	}
	else
	{ 
		echo"<script>alert('Invalide EmpID ')</script>";
	  
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

<br>
<table width="80%"  border="0" bgcolor="#CCFFFF">
  <tr>
    <th colspan="2" scope="col">Generate Pay statment for Employee</th>
    </tr>
  <tr>
    <td height="26">Enter employee Id 
      <input name="pempid" type="text" id="pempid"></td>
    <td>
		        
      <input name="Generate" type="submit" id="Generate" value="Generate">
        <input type="submit" name="Submit" value="Submit"></td>
  </tr>
</table>







  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
