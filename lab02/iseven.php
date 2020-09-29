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

$num = 10;

$remain = $num % 2;
 
//the remainder needs to 0 for even numbers 

echo($num); 
if (is_numeric($num) && $remain == 0)
echo "<p>The variable $num is even!</p>"; 

// echo "<p> $result </p>"; 
?> 
</body>

</html>