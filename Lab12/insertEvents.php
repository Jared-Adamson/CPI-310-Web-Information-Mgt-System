<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
if(isset($_POST['submit'])) {
    $sSql = "INSERT INTO events
         (event_name, event_location, event_date)
         VALUES ('".$_POST['postName']."', '".$_POST['postLocation']."', '".$_POST['postDate']."')";
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
<a href="lab12.php">Home</a>
