<?php




session_start();


$user = $_SESSION['username'];

if ($user)

{

//user is logged in

		if ($_POST['submit'])
		{
		//check fields
		
		$oldpassword = md5($_POST['oldpassword']);
		$newpassword = md5($_POST['newpassword']);
		$repeatnewpassword = md5($_POST['repeatnewpassword']);
		
		//check pass against db
		$connect = mysql_connect("localhost","root","");
		mysql_select_db("phplogin");
		
		$queryget = mysql_query("SELECT password FROM users WHERE username='$user'") or die("Query didn't work");
		$row = mysql_fetch_assoc($queryget);
		
		$oldpassworddb = $row['password'];
		
			
		
		//check pass
		if ($oldpassword==$oldpassworddb)
		{
		
		
		
		//check twonew pass
		if ($newpassword==$repeatnewpassword)
		{
		//success
		//change pass in db
	
		 if (strlen($newpassword)>25||strlen($newpassword)<6)   <---------------Here is the code
		{
		 echo "Password must be betwwen 6 & 25";
		}

		else
		{
		
				$querychange = mysql_query("
				UPDATE users SET password='$newpassword' WHERE username='$user'
				");
				
				session_destroy();
				die("Your pass has benn changed.<a href='index.php'>Return</a> to the main page");
		
		
		
		
		
		}
		}
		else
				die("New Pass don't match");
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
