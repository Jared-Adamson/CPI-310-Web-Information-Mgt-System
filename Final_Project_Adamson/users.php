<!--
//Jared Adamson
//CPI310
-->


<?php

include("dbconnect.php");

$con = new dbconnect();

$con->connect();

$sql = "SELECT * FROM eventUser WHERE user_name ='".$_POST["user"]."' AND user_password='".$_POST["password"]."'";


// Test POST variables
/*
echo "user Name<br>";

echo $_POST["user"]; 

echo "<br>";

echo "password<br>";

echo $_POST["password"];

*/

$result = mysql_query($sql);

if(mysql_num_rows($result) >= 1)
{
   
   
    $userType;

    while($info = mysql_fetch_array($result))
    {
       
        $userType = $info['user_type']; // 1 if viewer, 0 if normal user
    
    }

    if($userType=='viewer' || $userType == 'user')
    {
    
        session_start();
    
        $_SESSION['type'] = $userType;
    
        $_SESSION['username'] = $_POST["user"];
    
        $_SESSION['status'] = 100;
    
        echo "<center><h2>login successful! You are now being directed to The Event Book in 3 seconds.</h2></center></center>";
    
        header("refresh: 3; url= eventBook.php");
    
    }
  

   // echo "If OK!";  Test the if statement. 

}
else
{
  
  echo "Incorrect login, try again in 3 seconds.";
  
  header("refresh:3; url=login.html");

}

?>




