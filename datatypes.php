<?php
// echo"Hi";
$isolid = null;

## Arrays
# array(),[]

$name = "Priya Singh";

#indexed array
$companies = array("abc","eyfg","gdhsj");

#associative array
$details = array("age"=> 20,"location"=>"ktm");

#multidimenational array
$numbers = array(array(1,2,3),array(4,5,6),array(7,8,9));

echo $name;
echo"<br>";
//echo $companies;
echo "<pre>";
//var_dump($companies);
print_r($companies);
echo"</pre>";


echo $companies[0];
echo "<br>";

echo "<pre>";
print_r($numbers);
echo "</pre>";




?>