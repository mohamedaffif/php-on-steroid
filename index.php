
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>



 </form>
   

 </body>
 </html>

 <?php

//  $age = 0;
//  if($age >= 18){
//     echo "You are eligible to vote.";
//  } elseif($age <= 0) {
//     echo "That is not valid age.";
//  } elseif($age >= 100) {
//     echo "You are too old to enter.";
//  } else {
//     echo "You are not eligible to vote.";
//  }

$adult = false;
$hours = 40;
$rate = 15;
$weekly_pay= null;

if($hours <= 40){
    $weekly_pay = $hours * $rate;
    echo "Your weekly pay is: $" . $weekly_pay;
  } elseif($hours > 40 && $adult == true){
    $overtime_hours = $hours - 40;
    $weekly_pay = (40 * $rate) + ($overtime_hours * ($rate * 1.5));
    echo "Your weekly pay is: $" . $weekly_pay;
  } else {
    echo "You are not eligible for overtime pay.";
}
 ?>