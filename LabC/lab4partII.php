<html>
<head>
<style>

table.grades td {
    
    text-align: center;

}

table.grades {
    width:50%;

}
table.grades, th, td {

    border: 3px solid black;
    border-collapse: collapse;

}

table.grades tr:nth-child(even) {
  
    background-color: #white;

}

table.grades tr:nth-child(odd) {
  
   background-color:#c1c1c1;

}
table.grades th	{

    background-color: #c1c1c1;

}

table.grades td {
    
    padding: 10px;

}
</style>
</head>
<body>
<table class="grades">
<tr>
<td> NAME </td>
<td> AVERAGE </td>
<td> GRADE </td>
</tr>

<?php

function findGrade($gde) {

if(90<= $gde && $gde <= 100)  return "A";
if(80<= $gde && $gde <= 89)  return "B";
if(70<= $gde && $gde <= 79)  return "C";
if(60<= $gde && $gde <= 69)  return "D";
if(0<= $gde && $gde <= 59)  return "F";


}

$aGrades = array("Tom Hulohan" => 83, "Jimmy Page" => 79, "Zach Schider" => 60, "Kat Stevy" => 58, "Dirk Dirk" => 100);

//error_reporting(E_ALL);

//ini_set('display_errors', '1');

print("<center>");
print("<h1> Student Grades </h1>");


foreach($aGrades as $name => $temp)
{

print("<tr> <td> $name </td>");

print("<td> $temp </td>");

print("<td> " . findGrade($temp) . "</td> </tr>");

}

print("</center>");

?>

</table>
</body>
</html>