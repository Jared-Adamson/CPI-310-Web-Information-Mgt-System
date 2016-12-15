<!--
//Jared Adamson
//CPI310
//Lab 14
//Part 2
-->


<?php
 
  session_start();  // start the session

  $user = $_POST['user'];
 
  $password = $_POST['password'];
 
  $registeredUsers = array("User" => "User", "Password" => "Password");

  session_name('$user');  // set the session name

  session_save_path();

  $_SESSION['userName']=$user;


if($user == $registeredUsers['User']){

	if($password == $registeredUsers['Password']){

	echo "Login Successful you will be redirected to the main page in 5 seconds.";
 	header("refresh:5; url=logged.php");

	}else{

	echo "Invalid Password";

	session_destroy(); 

	}



}else{

echo "Invalid User Name";

session_destroy(); 

}


?>




