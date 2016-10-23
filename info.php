<!DOCTYPE html>
<html>
<head>
	<title>Verkefni 4</title>
	<link rel="stylesheet" type="text/css" href="info.css">
</head>
<body>

<?php

if($_GET['sida'] == "1")
{

	echo "<img src=\"mynd1.jpg\">";

	echo "<p>INTERSTELLAR</p>";

	echo "<br>";
	
	echo "<div class = \"lysing\">";
	echo "<p>A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.</p>";
	echo "</div>";	
} 
else if($_GET['sida'] == "2")
{
	echo "<img src=\"mynd2.jpg\">";

	echo "<p>GRAVITY</p>";

	echo "<br>";
	
	echo "<div class = \"lysing\">";
	echo "<p>A medical engineer and an astronaut work together to survive after an accident leaves them adrift in space..</p>";
	echo "</div>";	
}
?>



</body>
</html>