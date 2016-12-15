

<?php

class dbconnect{

function connect()
{

    $con=mysql_connect("localhost", "jadamso2", "jadamso2");

    if(!$con) {

        die('Failed to connect!' . mysql_error());

    }

    mysql_select_db("jadamso2", $con);

 }


}

?>