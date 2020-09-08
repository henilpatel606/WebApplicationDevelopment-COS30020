<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Web application development" />
		<meta name="keywords" content="PHP" />
		<meta name="author"   content="Henil P" />
		<title>WAD</title>
	</head>
	
	<body>
	 
	<h1>Web Programming - Lab 1</h1>

	<h1>Use of PHP built-in functions</h1>

	<?php //This is task 2 of lab 1 , using functions
	?>

	<?php
	 /* Use of abs() and pow() built-in functions, and echo statement. */
		 echo "<p>Absolute value of -9 is: ", abs (-9),".</p>";
		 echo "<p>2 to the power of 5 is : ", pow(2,5),".</p>";
	?>

	<?php
	 /* Use of decbin() and bindec() functions. */
		 echo "<p>Decimal equivalent of 1101 is: ", bindec(1101),".</p>";
		 echo "<p>Binary equivalent of 14 is: ", decbin(14),".</p>";
	?>
	</body>
	
</html>