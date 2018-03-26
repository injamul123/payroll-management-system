<?php 
include("dbconnect.php");
if(isset($_POST["Submit"]))
{
     $adate=date("Y-m-d");
	 
	 $am=substr($adate,5,2);
	 //echo "----".$am;
	 if($am=="07")
	 {
	 	$rs2=mysqli_query($con,"select * from annualinc");
		$row=mysqli_fetch_object($rs2);
		$ai=$row->aincrement;
		//echo "----".$ai;
	 	$rs1=mysqli_query($con,"Select empid,basicpay from empinfo ");
		while($row1=mysqli_fetch_object($rs1))
		{
			  $bp=$row1->basicpay;
			  $empid=$row1->empid;
			  $incr=($bp*$ai)/100;
			  $rs3=mysqli_query($con,"update empinfo set basicpay=basicpay+'$incr' where empid='$empid'");

			  
		}
		echo"Incremented";
	 }
	 else
	 {
	      echo"<script>alert('invalid increment month,you can increment only in july')</script>";
	 }
}
?>






























<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="421" border="0" align="center">
    <tr>
      <td colspan="2"> <div align="center" class="style1">Update Annual Increment
        </div>
      <div align="center"></div></td>
    </tr>
    <tr>
      <td width="208"><div align="center">Increment 3% <b></div></td>
      <td width="197"><div align="center">
        <input type="submit" name="Submit" value="Click here">
        
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
</div></td>
    </tr>
  </table>
</form>
</body>
</html>
