<?php
include("dbconnect.php");
$con = new dbconnect();
$con->connect();

$email;

(event_id, event_name, event_location, event_date)
		 VALUES ('".$_POST['event_id']."', '".$_POST['event_name']."', '".$_POST['event_location']."', '".$_POST['event_date']."')";

if(isset($_POST['submit'])) {
         $eID = $_POST['event_id'];
         $eName = $_POST['event_name'];
         $eLocation = $_POST['event_location'];
         $eDate = $_POST['event_date'];


         $eventID =$_POST['old_id'];
         $sSql="UPDATE addressbook SET event_id= \"$eID\", event_name= \"$eName\", event_location= \"$eLocation\", eDate=\"$event_date\" WHERE event_id =\"$eID\"";

         echo $sSql;

        mysql_query($sSql);
}

if(isset($_GET['id'])) {

        $sSql = "SELECT * FROM events WHERE email='".$_GET['id']."'";

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
<a href="lab13.php">Home</a>
