<?php

##for loop
for( $i = 0; $i < 5; $i++ )
{
    echo"Print: " .$i;
    echo"<br>";
}

##for each
$companies = array("Nurix","leapfrog","risegit","roundtable");
foreach( $companies as $element)
{
    echo "Print: .$element <br>";
}