<?php
header('Content-type:text/html;charset=utf-8');

//Task 1

echo "<h2>1 задача</h2>";
$user_data = array("first_name"=>"Venislav", 
                   "second_name"=>"Ivanov" ,
                   "third_name"=>"Georgiev",
                   "age"=>"37",
                   "profession"=>"director" );
echo "<ul>";
echo '<li>First name:'.$user_data["first_name"].'</li>';
echo '<li>Second name:'.$user_data["second_name"].'</li>';
echo "</ul>";

//Task 2

echo "<h2>2 задача</h2>";
$user1_data = array("name"=>"Venislav Georgiev",
	                "tel."=>"0878123456");
$user2_data = array("name"=>"Malina Petrova",
	                "tel."=>"0878456789");

echo "<ul>";
echo '<li>Name:'.$user1_data["name"].'</li>';
echo '<li>Tel.:'.$user1_data["tel."].'</li>';
echo "</ul>";
echo "<ul>";
echo '<li>Name:'.$user2_data["name"].'</li>';
echo '<li>Tel.:'.$user2_data["tel."].'</li>';
echo "</ul>";

echo "<table border=1>";
echo "<tr>";
echo '<td>Name:'.$user1_data["name"].'</td>';
echo '<td>Tel.:'.$user1_data["tel."].'</td>';
echo "</tr>";
echo "<tr>";
echo '<td>Name:'.$user2_data["name"].'</td>';
echo '<td>Tel.:'.$user2_data["tel."].'</td>';
echo "</tr>";
echo "</table>"


