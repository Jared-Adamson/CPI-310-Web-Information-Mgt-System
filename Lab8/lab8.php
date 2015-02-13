<!--Jared Adamson-->
<!--CPI310 - Lab7-->


<?php

define("breadV" , 2.00);
define ("eggsV", 8.00);
define ("soupV", 5.00);
define ("drinkV", 1.50);

$bread = $_POST['bread'];
$eggs = $_POST['eggs'];
$soup = $_POST['soup'];
$drink = $_POST['drink'];

$min = 0;

$max = 5;




print("<center><h1><strong> Food Order Bill </strong></h1></center>");

if ($bread>"5") {
  echo "<br>Please order no more then 5 Bread.</br>";
}
if ($eggs>"5") {
  echo "<br>Please order no more then 5 Eggs.</br>";
}
if ($soup>"5") {
  echo "<br>Please order no more then 5 Soups.</br>";
}



$bread2 = filter_var($bread, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)));
$eggs2 = filter_var($eggs, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)));
$soup2 = filter_var($soup, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)));

$totalBill = breadV * $bread2 + eggsV * $eggs2 + soupV * $soup2 + drinkV;

 print("<br> Bread = ".breadV*$bread2." </br>");

  print("<br> Eggs = ".eggsV*$eggs2." </br>");

   print("<br> Soup = ".soupV*$soup2." </br>");

  print("<br> Drink = ".drinkV." </br>");
  print("<br> TOTAL = "."$totalBill". "</br>");


?>
