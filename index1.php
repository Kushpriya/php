<!DOCTYPE html>
<html>
<body>

<?php
##phpinfo();

##Display
echo"HEllo World";
echo"<br>priya";

print"<h1>munni <br>";


##concat
echo"hello" ." " ."munni";
 echo"<br>";

##variables
$num =1;
$name = "priya";

echo "my name is $name";

$number =1;
$floating_number = 1.4;
$string ="priya";
$bool =true | false;

echo $floating_number;
var_dump($number); //vv.imp


##function()
$name_p = "PRIYA";
function display($name,$age)
{
global $name_p;
echo"<br>i am hungry!!!$name_p";
}

//display("kush",20);

##conditions
if(true)
{
#do something
}
else
{
#do something
}

switch($age)
{
case 20:
#do something
break;
default:
##do something
}

?>

</body>

</html>