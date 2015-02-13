<html>

<body>

<center>

<h1> The Event Book - Add Event </h1>

<?php

session_start();

include("dbconnect.php");

$con= new dbconnect();

$con->connect();
/*
if(!$_SESSION['type'])
{

    $_SESSION['type'] = "Unregistered Guest";

}
*/
if(isset($_POST['submit'])) 
{

    $sSql = "INSERT INTO eventBook
         (event_name, event_location, event_date, user_name)
         VALUES ('".$_POST['postName']."', '".$_POST['postLocation']."', '".$_POST['postDate']."', '".$_SESSION['username']."')";

        echo "$sSql <br>";

        mysql_query($sSql);

        $update=mysql_affected_rows();

        echo "<h2>$update Record Inserted</h2><br />";

}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

    Event Name<input type="text" name="postName"><br>
    Event Location<input type="text" name="postLocation"><br>
    Event Date<input type="text" name="postDate"><br>
    
    

    <input type="submit" name="submit" value="Submit Event">

</form>
<a href="eventBook.php">Home</a>
</center>

</body>


</html>