<?php

include("dbconnect.php");

$con = new dbconnect();

$con->connect();

if(isset($_POST['submit']))
{

	$sSql = "INSERT INTO eventUser (user_name, user_password, user_email, phone_number, first_name, last_name,  user_type) 
		VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[phone]', '$_POST[first_name]', '$_POST[last_name]', '$_POST[type]')";
    
    $success = mysql_query($sSql);
	
	if($success)
	{
	
		session_start();
		$_SESSION['type'] = $_POST['type'];
		$_SESSION['username']= $_POST['username'];
		$_SESSION['status'] = 100;
        echo '<h2>USER REGISTERED</h2><br>';
		
		header("refresh:3; url=login.html");

		
	}
	else
	{
	
		echo"<h2>There was an error with your registration please wait 5 seconds</h2>";
		
		header("refresh:3; url=register.html");
	
	}

}

?>