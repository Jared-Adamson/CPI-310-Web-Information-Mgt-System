<html>

<body>

<center>

<h1> The Event Book </h1>

<?php

session_start();

include("dbconnect.php");

include("manageEvents.php");

$con= new dbconnect();

$con->connect();

error_reporting(E_ALL);

if(!$_SESSION['type'])
{

	$_SESSION['type'] = "Unregistered Guest";

}

if($_SESSION['type'] == 'viewer')
{

	echo " Welcome: ";

	echo $_SESSION['username'];

	

}else if($_SESSION['type'] == 'user')
{

	echo " Welcome:&nbsp;&nbsp;";

	echo $_SESSION['username'];

}else
{

echo " Welcome: ";

echo $_SESSION['type'];

}

if($_SESSION['type'] == 'user' || $_SESSION['type'] == 'viewer')
{
$result = mysql_query("SELECT * FROM eventBook");

$event= new manageEvents();

$event->createTable();

while($row = mysql_fetch_array($result))
{

    $event->displayRowEdit($row[0], $row[1], $row[2], $row[3], $row[5]);

}
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<form action=logout.php>";
echo "<input type = \"submit\" value = \"Logout\"/></form>";
echo "</body>";
echo "</html>";
}else
	{
	echo "<br><br>";
   	echo "You have logged out";
   	echo "<br> Please re-login. You will be directed to the login page in 3 seconds";
   	header("refresh:3 ; url=project.html");
	}
?>

</table>

<br><br>

<form action=insertEvents.php>

<input type = "submit" value = "Add Event"/></form>

</center>

</body>


</html>


