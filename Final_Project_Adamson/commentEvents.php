<html>

<body>

<center>

<h1> The Event Book - Comment </h1>

<?php

session_start();

include("dbconnect.php");
$con = new dbconnect();
$con->connect();

$eventID;

if(isset($_POST['submit'])) {

         $eID = $_POST['event_id'];

         $eComment = $_POST['comment'];


         $eventID =$_POST['old_id'];
  
         $sSql="UPDATE eventBook SET event_comment=\"$eComment\" WHERE event_id =\"$eID\"";

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
	
        <br>Event Comment:<br><textarea name="comment" rows="5" cols="45" style="overflow: scroll"></textarea><br />

        <input type="hidden" name="old_id" value="<?php echo $aRow['event_id']; ?>" /><br/>>
        <input type="submit" name="submit" value="Update Item" />

</form>

<a href="eventBook.php">Home</a>
</center>

</body>


</html>