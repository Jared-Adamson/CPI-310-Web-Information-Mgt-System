<html>

<body>

<center>

<h1> Events </h1>

<?php

include("dbconnect.php");

include("manageEvents.php");

$con= new dbconnect();

$con->connect();

error_reporting(E_ALL);

$result = mysql_query("SELECT * FROM events");

$events= new manageEvents();

$events->createTable();

while($row = mysql_fetch_array($result))
{

    $events->displayRowEdit($row[0], $row[1], $row[2], $row[3]);}

?>

</table>

</center><br><br>

<form action=insertEvents.php>

<input type = "submit" value = "Add Event"/></form>

</body>

</html>
