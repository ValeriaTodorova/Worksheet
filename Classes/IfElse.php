<?php
header('Content-type:text/html;charset=utf-8');
//Task 1
$a = rand(0,10);
$b = rand(0,10);

echo 'a='. $a .'and b='. $b;

if ($a<$b) {
	echo '<p>a='. $a .'and b='. $b.'</p>';
}  else {
	echo '<p>a='. $b .'and b='. $a.'</p>';
}
//Task 2

$a = rand(0,100);

echo 'a='. $a;
 
if ($a%2==0) {
   echo '<p>a='.$a .'</p>';
}  else {
	echo "<p>False</p>";
}
//Task 3.1
$a = rand(0,10);
$b = rand(0,10);
$c = $a*$b;

echo '<p>a='. $a .'b='. $b.'c='.$c .'</p>';
 
if ($c%2==0) {
	echo '<p>c=chetno</p>';
} else {
	echo "<p>False</p>";
}
//Task 8

$a = rand(7,70);

echo $a.'years';

if ($a<=18) {
	echo "<p> Go to school</p>";
} elseif ($a>18&& $a<=65) {
	echo "<p>Go to work</p>";
} else  {
	echo "<p>Retire</p>";
}

//Task 11
$a = 10;
$b = 3;
$c = 5;

if ($a==$b && $b==$c) {
	echo "равностранен";
} elseif (($a==$b && $b!=$c)||($b==$c && $c!=$a)||($a==$c && $b!=$a)) {
	echo "равнобедрен";
} else {
    echo "разностранен";
}
//Task 7

$username="acad";
$password="acad2013";

//user input

$username1="acad";
$password1="acad2013";

echo "<p>Hi</p>";

if ($username1==$username) {
	if ($password1==$password) {
   echo "Wellcome, $username";
	} else {
		echo"wrong password";
	}//end if/else password
}else {
	echo "wrong username";
}//if/else username

//Task10

echo "<p>3,5,7</p>";

