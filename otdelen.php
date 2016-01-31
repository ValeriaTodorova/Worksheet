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
	