<?php
       $con=mysqli_connect('localhost','root','');
	   if(!$con)
        {
		      die("Database connection error!".mysqli_error(0));   
		}
         $db_selected=mysqli_select_db($con,'payroll');
         if(!$db_selected)
         {
		        die("DB selection error".mysqli_error(0));
		 }
?>


