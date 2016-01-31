<?php
if (!empty($_POST["submit"])) {
	$name = $_POST['name'];
	$favouritecity = $_POST['favouritecity'];
	

	echo "$name";
	echo "Your favourite city is :$favouritecity";
    
    echo '<a href="zad9_10.php">Go back</a>';

}
?>