<?php
$theData = simplexml_load_File("address.xml");

foreach($theData->ADDRESS as $theAddress) {
    $theFirstName = $theAddress->FirstName;
    $theLastName = $theAddress->LastName;
    $theHomeAddress = $theAddress->MailingAddress;
    $theEmail1 = $theAddress->Email->Email1;
    $theEmail2 = $theAddress->Email->Email2;
    $theEmail3 = $theAddress->Email->Email3;

	echo "<p><span style=\"text-decoration:underline\">"."<b>".$theFirstName." ".$theLastName."</b>"."</span><br/>".$theHomeAddress."<br/>".$theEmail1."<br/>".$theEmail2."<br/>".$theEmail3."</p>";

    unset($theFirstName);
    unset($theLastName);
    unset($theHomeAddress);
    unset($theEmail1);
    unset($theEmail2);
    unset($theEmail3);
}
?>