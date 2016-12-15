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


$totalBill = breadV * $bread + eggsV * $eggs + soupV * $soup + drinkV;

print("<center><h1><strong> Food Order Bill </strong></h1></center>");

if(!filter_var("bread", FILTER_VALIDATE_INT))
 {
 echo("Bread value is not valid");
 }
else
 {
 print("<br> Bread = ".breadV*$bread." </br>");
 }

if(!filter_var("eggs", FILTER_VALIDATE_INT)
 {
 echo("Eggs value is not valid");
 }
else
 {
  print("<br> Eggs = ".eggsV*$eggs." </br>");
 }
 if(!filter_var("soup", FILTER_VALIDATE_INT)
  {
  echo("Soup value is not valid");
  }
 else
  {
   print("<br> Soup = ".soupV*$soup." </br>");
 }
  print("<br> Drink = "."drinkV"." </br>");
  print("<br> TOTAL = "."$totalBill". "</br>");


?>
