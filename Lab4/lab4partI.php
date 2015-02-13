<html>
<head>
<style>

table.fruits td {
    
    text-align: center;

}

table.fruits {
    width:50%;

}
table.fruits, th, td {

    border: 3px solid black;
    border-collapse: collapse;

}

table.fruits tr:nth-child(even) {
  
    background-color: #white;

}

table.fruits tr:nth-child(odd) {
  
   background-color:#grey;

}
table.fruits th	{

    background-color: #c1c1c1;

}

table.fruits td {
    
    padding: 10px;

}
</style>
</head>
<body>
<table class="fruits">
<tr>
<td> NAME </td>
<td> CALORIES </td>
</tr>

<?php
$aFruits = array("Apple" => 80, "Orange" => 79, "Banana" => 80, "Lemon" => 78, "Mango" => 100);

error_reporting(E_ALL);

ini_set('display_errors', '1');

print("<center>");
print("<h1> Fruits & Calories</h1>");


foreach($aFruits as $name => $temp)
{
print("<tr> <td> $name </td>");
print("<td> $temp </td> </tr>");
}
print("</center>");
?>

</table>
</body>
</html>