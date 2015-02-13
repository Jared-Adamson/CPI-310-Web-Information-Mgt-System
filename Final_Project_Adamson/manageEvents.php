<?php
session_start();

class manageEvents
{

function createTable()
{
   if($_SESSION['type'] == 'user')
   {

   echo "<table border=3>";

   echo "<tr>";

   echo "<th> Event ID </th>";

   echo "<th> Event Name</th>";

   echo "<th> Event Location</th>";

   echo "<th> Event Date</th>";

   echo "<th> Event Comment</th>";

   echo "<th> COMMENT </th>";

   echo "<th> UPDATE </th>";

   echo "<th> DELETE </th>";

   echo "</tr>";

  }else if($_SESSION['type'] == 'viewer')
  {

   echo "<table border=3>";

   echo "<tr>";

   echo "<th> Event ID </th>";

   echo "<th> Event Name</th>";

   echo "<th> Event Location</th>";

   echo "<th> Event Date</th>";

   echo "<th> Event Comment</th>";

   echo "<th> COMMENT </th>";

   echo "</tr>";


  }else
  {

   echo "<table border=3>";

   echo "<tr>";

   echo "<th> Event ID </th>";

   echo "<th> Event Name</th>";

   echo "<th> Event Location</th>";

   echo "<th> Event Date</th>";

   echo "<th> Event Comment</th>";

   echo "</tr>";

  }

}

function displayRowEdit($eventId, $eventName, $eventLocation, $eventDate, $eventComment)
{


 
 if($_SESSION['type'] == 'user')
   {

  echo "<tr>";

  echo "<td> $eventId </td>";

  echo "<td> $eventName </td>";

  echo "<td> $eventLocation </td>";

  echo "<td> $eventDate </td>";

  echo "<td> $eventComment </td>";

  echo "<td> <form action=\"commentEvents.php?id=$eventId\" method=\"post\">";
  
  echo "<input type=\"submit\" value=\"COMMENT\" > </form></th>";

  echo "<td> <form action=\"updateEvents.php?id=$eventId\" method=\"post\">";
  
  echo "<input type=\"submit\" value=\"UPDATE\" > </form></th>";

  echo "<td> <form action=\"deleteEvents.php?id=$eventId\" method=\"post\">";
  
  echo "<input type=\"submit\" value=\"DELETE\" > </form></th>";

  echo "</tr>";

  }else if($_SESSION['type'] == 'viewer')
  {
  echo "<tr>";

  echo "<td> $eventId </td>";

  echo "<td> $eventName </td>";

  echo "<td> $eventLocation </td>";

  echo "<td> $eventDate </td>";

  echo "<td> $eventComment </td>";

  echo "<td> <form action=\"commentEvents.php?id=$eventId\" method=\"post\">";
  
  echo "<input type=\"submit\" value=\"COMMENT\" > </form></th>";

  echo "</tr>";



  }else
  {

  echo "<tr>";

  echo "<td> $eventId </td>";

  echo "<td> $eventName </td>";

  echo "<td> $eventLocation </td>";

  echo "<td> $eventDate </td>";

  echo "<td> $eventComment </td>";

  echo "</tr>";

  }

 }


}
?>