<?php
//Task 1
$a = 5 ;
$b = 10;
echo "<p>".$a."</p><p>".$b."</p>";

/*Task 2 
circle*/

$r = 3;
$PI = 3.14;
$C =2*$PI*$r;
$S =$PI*$r*$r;


echo '<p> Perimeter of a trapezoid is ' . $C . '  cm </p>';
echo " Area of a circle is " . $S . " cm2";

/*Task 3 
trapezoid*/


$a = 5 ;
$b = 10;
$c = 6 ;
$h = 3 ;
$P = $a+$b+$c+$c;
$S = ($a + $b)*($h/2);


echo '<p> Perimeter of a trapezoid is ' . $P . '  cm </p>';
echo " Area of a trapezoid is " . $S . " cm2" ;

/*Task 4 
Table */

echo "<table width='400' height='100' border='1'>";
echo "<tr><td>P(rectangle) = 2*a + 2*b </td><td>S(rectangle)=a*b</td></tr>";
echo "<tr><td>P(square)=4*a</td><td>S(square) = a*a</td></tr>";
echo "<tr><td>P(triangle=a+b+c</td><td>S(triangle) = 1/2*(b*h)</td></tr>";
echo "</table>";

/*Task 5 
Date */

echo "<h1>Домашно 5 задача</h1>";
echo "<h2>Текуща дата и час в България</h2>";
echo "днес е ".date("d.m.Y")."<br>";
date_default_timezone_set("Europe/Sofia");
echo "часът е ".date("h:i:s");
//Task 6

echo "<h2>Дата и час в Бразилия</h2>";
date_default_timezone_set("America/Buenos_Aires");
echo "днес е ".date("d.m.Y")."<br>";
echo "часът е ".date("h:i:s")."<br>";

//Task 7

echo "днес е ".date("d/m/Y")."<br>";
echo "днес е ".date("Y-m-d")."<br>";
echo "днес е ".date("d/M/Y")."<br>";

//Task 8

date_default_timezone_set("Europe/Sofia");
echo "часът е ".date("H:i")."<br>";
echo "часът е ".date("h:ia")."<br>";
echo "часът е ".date("H:i:s")."<br>";


?>