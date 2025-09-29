<?php
// Arithmetic Operators
// + - * / ** %
$x = 10;
$y = 3;
$z = null;

echo $z . "<br>";
// addition
$z = $x + $y; 
$z = $x - $y;
$z = $x * $y;
$z = $x / $y;
$z = $x ** $y;
echo $z . "<br>";
// Increment/decrement operators

$counter = 0;
$counter = $counter + 1;
$counter++;
// decrement 
// ++, --
$counter = $counter - 1;
$counter--;
echo $counter . "<br>";
// Operators Precedence
// ()
//  ** 
// *, /, %
// +, -
 ?>