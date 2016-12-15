<?php
$city = $_POST['city'];
$bArray = array("Tempe" => 98, "Chandler" => 99, "Phoenix"=> 100);
if (array_key_exists($city, $bArray))
{
print("<td> $city </td>");
print("<td>".$bArray[$city]."</td>");
}else
{
 print( $city. "does not exist");
}
?>
