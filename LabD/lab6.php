<html>

<body>

<h1> CPI310, Lab6 - Jared Adamson</h1>

<?php

$name;

$email = $_POST['email'];

$eArray = array('T.Hulohan@asu.edu' => 'Tom Hulohan', 'J.Page@asu.edu' => 'Jimmy Page', 'Z.Schider@asu.edu' => 'Zach Schider');

if(array_key_exists($email, $eArray))
{

    $name = $eArray[$email];

}
else
{
	print($email. "Does not exist!");
}

?>

	<table class="Info" border="3" width="60%">

	<tr>

	<td>EMAIL</td>

	<td>NAME</td>

	</tr>

	<tr>

	<td><?php echo $email?></td>

	<td><?php echo $name?></td>

	</tr>


	</table>

</body>

</html>