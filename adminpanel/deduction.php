<?php
 include("dbconnect.php");
  if(isset($_POST["Submit"]))
  {
   $nps=$_POST["nps"];
   $gis=$_POST["gis"];
   $ptax=$_POST["ptax"];
   $rs=mysqli_query($con,"insert into deduction value ('$nps','$gis','$ptax')");
   if($rs)
   {
    echo "<script>alert('saved')</script>";
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
  <table width="397" height="156" border="0" align="center" bgcolor="#CCFFFF">
    <tr>
      <td colspan="2"><div align="center"><strong>Deduction</strong></div></td>
    </tr>
    <tr>
      <td>NPS</td>
      <td><input name="nps" type="number" id="nps"required placeholder="Enter NPS"></td>
    </tr>
    <tr>
      <td>GIS</td>
      <td><input name="gis" type="number" id="gis"required placeholder="Enter Gis"></td>
    </tr>
    <tr>
      <td>PTAX</td>
      <td><input name="ptax" type="number" id="ptax"required placeholder="Enter Professional Tax"></td>
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
