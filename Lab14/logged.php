<!--
//Jared Adamson
//CPI310
//Lab 14
//Part 2
-->


<?php

session_start();  

echo "Logged In";

echo"<br><br>";

echo "Session ID: "; 

$s_id = session_id();

echo $s_id;

echo "<br><br>";

echo "Created For: ";

echo $_SESSION[userName];

echo "<br><br>";

session_destroy(); 

?>
