<?php

$theAddress = simplexml_load_file("address.xml");


foreach ($theAddress->xpath("//LastName") as $lastName) 
{ 
 	echo "<h2>";
    echo "<br>".$lastName."<br>"; 
    echo "</h2>";

}

?>
