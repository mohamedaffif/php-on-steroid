
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <form action="index.php" method="post" >
      <label>username</label>
      <input type="text" name="username" placeholder="Enter username" autocomplete="off">
      <label>password</label>
      <input type="password" name="password" placeholder="Enter password" autocomplete="off">
      <input type="submit" name="login" value="Log in">
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

// $adult = false;
// $hours = 40;
// $rate = 15;
// $weekly_pay= null;

// if($hours <= 40){
//     $weekly_pay = $hours * $rate;
//     echo "Your weekly pay is: $" . $weekly_pay;
//   } elseif($hours > 40 && $adult == true){
//     $overtime_hours = $hours - 40;
//     $weekly_pay = (40 * $rate) + ($overtime_hours * ($rate * 1.5));
//     echo "Your weekly pay is: $" . $weekly_pay;
//   } else {
//     echo "You are not eligible for overtime pay.";
// }

// LOGICAL OPERATORS
// $age = 25;
// $citizen = false;

// if($age >= 18 && $citizen ){
//   echo"You are eligible to vote.";
// } else {
//   echo"You are not eligible to vote.";

// associative array = an array made of key-value pairs
   //   $capitals = array(
   //      "USA" => "Washington, D.C.",
   //      "France" => "Paris",
   //      "Germany" => "Berlin",
   //      "Italy" => "Rome"
   //   );

   //   $capital = $capitals[$_POST['country']];

   //   echo"the capital is  {$capital}";

   //   $capital = array_values($capitals);
   //   foreach($capital as $country){
   //      echo "<p>$country</p>";
   //   };

   //   echo $capitals["Italy"];
   //   echo array_keys($capitals)[2];
   //   foreach($capitals as $country => $capital){
   //      echo "<p>The capital of $country is $capital.</p>";
   //   }

   // $username = true;

   // if(empty($username)){
   //    echo " This variable is empty";

   // } else {
   //    echo"This variable is not empty";
   // }
   // if(isset($username)){
   //    echo " This variable is set";

   // } else {
   //    echo"This variable is not set";
   // }

   foreach($_POST as $key => $value){
      echo "<p>$key : $value</p>";
   }

   // if(isset($_POST['login'])){
   //    $username = $_POST['username'];
   //    $password = $_POST['password'];

   //    if(!empty($username) && !empty($password)){
   //       echo "Hello {$username}";
   //       // echo "Username: $username <br> Password: $password";
   //    } else {
   //       echo "All fields are required.";
   //    }
   // }
 ?>