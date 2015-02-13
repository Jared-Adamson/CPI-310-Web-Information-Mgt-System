<?php

include("dbconnect.php");

$con= new dbconnect();

$con->connect();

if(isset($_GET['id'])) {
    
    $eId= $_GET['id'];
	
	$sSql = "DELETE FROM events WHERE event_id=\"$eId\"";
    
    echo $sSql;
	
	$oResult = mysql_query($sSql);
    
    $rows=mysql_affected_rows();
	
	echo "<h2>Event Deleted </h2>";

}

?>
<a href="lab12.php">Home</a>