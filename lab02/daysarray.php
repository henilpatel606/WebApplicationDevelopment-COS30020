<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Web Programming :: Lab 2" />
<meta name="keywords" content="Web,programming" />
<title>Using variables, arrays and operators</title>
</head>

<body>

<h1>Web Programming - Lab 2</h1>
<?php
	$days = array ("monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"); // declare and initialise array
	echo "<h4> The days of week in English are: </h4>";
	print_r($days);

//Changing the days name in french

	$days[0] = "Lundi";
	$days[1] = "Mardi";
	$days[2] = "Mercredi";
	$days[3] = "Jeudi";
	$days[4] = "Vendredi";
	$days[5] = "Samedi";
	$days[6] = "Dimanche" ;

	echo "<h4> The days of week in French are: </h4>";
	print_r($days);

?>
</body>

</html>
