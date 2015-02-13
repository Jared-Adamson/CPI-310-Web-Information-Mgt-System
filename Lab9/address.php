


<table align="center" border="3">

<tr>

<td>First Name</td>

<td>Last Name</td>

<td>Address</td>

<td>E-Mail</td>

</tr>

<?php

include("dbconnet.php");

$con = new dbconnect();

$con->connect();

$result = mysql_query("SELECT * FROM AddressBook");


while($row = mysql_fetch_array($result)) {
        echo '<tr><td>'.$row['first_Name'].'</td>'.'<td>'.$row['last_Name'].'</td>'.'<td>'.$row['Address'].'</td>'.'<td>'.$row['Email'].'</td>'.'</tr>';
  }


mysql_close($con);

?>

</table>
