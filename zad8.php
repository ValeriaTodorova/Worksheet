<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Triangle</title>
</head>
<body>

	<form action="zad8.php" method="get">
		angle A
	<input type="text" name="angleA">
		angle B
	 <input type="text" name="angleB">
		angle C
	 <input type="text" name="angleC">
	 <input type="submit" name="submit" value="check">

</form>
<?php
if (!empty($_GET["submit"])) {
	$angleA = $_GET['angleA'];
	$angleB = $_GET['angleB'];
	$angleC = $_GET['angleC'];

	$sum = $angleA + $angleB +$angleC;
	if ($sum == 180) {
		echo "Valid Triangle";
			} else {
				echo "Not Valid Triangle";
			}
    
}
?>
	
</body>
</html>