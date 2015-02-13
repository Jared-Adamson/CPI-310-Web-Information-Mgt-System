<!--Jared Adamson-->
<!--CPI310 - Lab7-->


<?php

define("brkVal" , 25);
define ("treVal", 80);
define ("eoVal", 50);
define ("boVal", 15);

$brkQty = $_POST['brkQty'];
$treQty = $_POST['treQty'];
$eoQty = $_POST['eoQty'];
$boQty = $_POST['boQty'];

$totalBill = brkVal * $brkQty + treVal * $treQty + eoVal * $eoQty + boVal * $boQty;

print("<center><h1><strong> Auto Part Bill Summary </strong></h1></center>");
print("<br> Brake System = ".brkVal*$brkQty." </br>");
print("<br> Tires = ".treVal*$treQty." </br>");
print("<br> Engine Oil = ".eoVal*$eoQty." </br>");
print("<br> Break Oil = ".boVal*$boQty." </br>");
print("<br> TOTAL = "."$totalBill". "</br>");

?>
