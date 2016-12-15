<?php
class manageEvents
{

function createTable()
{
   echo "<table border=3>";

   echo "<tr>";

   echo "<th> Event ID </th>";

   echo "<th> Event Name</th>";

   echo "<th> Event Location</th>";

   echo "<th> Event Date</th>";

   echo "<th> DELETE </th>";

   echo "</tr>";

}

function displayRowEdit($eventId, $eventName, $eventLocation, $eventDate)
{


 

  echo "<tr>";

  echo "<td> $eventId </td>";

  echo "<td> $eventName </td>";

  echo "<td> $eventLocation </td>";

  echo "<td> $eventDate </td>";

  echo "<td> <form action=\"deleteEvents.php?id=$eventId\" method=\"post\">";
  
  echo "<input type=\"submit\" value=\"DELETE\" > </form></th>";

  echo "</tr>";

}



}

?>