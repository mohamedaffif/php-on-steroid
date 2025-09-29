<?php

// variable  = a reusable container that holds data 
//             string, integer, float , boolean

$name = "Harry";
$food = "pizza";
$email = "fake@gmail.com";

// integer 
$age = 21;
$users = 2;
$quantity = 90;

// floar 
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;
 // boolean 
 // true
 // false 
 $employed = true;
 $online = false;
 $for_sale = true;
$total = null;

echo "You have ordered {$quantity} x {$food}s <br>";
$total = $price * $quantity;

echo "Your total is: \${$total} <br>";
?>