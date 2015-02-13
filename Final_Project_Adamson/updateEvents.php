<html>

<body>

<center>

<h1> The Event Book - Update Event </h1>

<?php

session_start();

include("dbconnect.php");
$con = new dbconnect();
$con->connect();

$eventID;

if(isset($_POST['submit'])) {
         $eID = $_POST['event_id'];
         $eName = $_POST['event_name'];
         $eLocation = $_POST['event_location'];
         $eDate = $_POST['event_date'];


         $eventID =$_POST['old_id'];
         $sSql="UPDATE eventBook SET event_name= \"$eName\", event_location= \"$eLocation\", event_date=\"$eDate\" WHERE event_id =\"$eID\"";

         echo $sSql;

        mysql_query($sSql);
}

if(isset($_GET['id'])) {

        $sSql = "SELECT * FROM eventBook WHERE event_id='".$_GET['id']."'";

        $oResult = mysql_query($sSql);

        $aRow = mysql_fetch_assoc($oResult);
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" >

        Event ID:<input type="text" name="event_id" /><br /> 
	Event Name:<input type="text" name="event_name" /><br />
	Event Location:<input type="text" name="event_location" /><br />
	Event Date:<input type="text" name="event_date" /><br />

        <input type="hidden" name="old_id" value="<?php echo $aRow['event_id']; ?>" /><br/>>
        <input type="submit" name="submit" value="Update Item" />

</form>
<a href="eventBook.php">Home</a>
</center>

</body>


</html>