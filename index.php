
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <form action="index.php" method="post" >
     <input type="checkbox" name="foods[]" value="Pizza"/> Pizza <br>
     <!-- <input type="checkbox" name="foods[]" value="Hamburger"/> Hamburger <br> -->
     <!-- <input type="checkbox" name="foods[]" value="Hotdog"/> Hotdog <br>
     <input type="checkbox" name="foods[]" value="Taco"/> Taco <br> -->
     <input type="submit" name="submit"/>
   </form>
   

 </body>
 </html>

 <?php

 $username = array("Bro", "the", "nune");
 $phone = "123-456-7890";
//  $username = strtolower($username);
//  $username = strtoupper($username);
//  $username = trim($username);
//  $username = str_pad($username,20,"0");
// $phone = str_replace("-","",$phone);
// $username = strrev($username);
// $username = str_shuffle($username);
// $equals = strcmp($username, "Bro nune");
// $count = strlen($phone);
// $index = strpos($username, " ");
// $index = substr($phone, 0,3);
// $first_name = substr($username, 0,3);
// $last_name = substr($username, 4,8);

$username = implode(" ", $username);
echo $username;
// foreach($full_name as $name){
//    echo "<p>$name</p>";
// }

// echo $count;
  // echo $phone;
  // echo $equals;

//  echo $username;

//  function hypotenuse($a, $b){
//    $c = sqrt($a**2 + $b**2);
//    return $c;
//  }

//   echo hypotenuse(3,4);

 // functions 
//  function is_even($number){
//   $result = $number % 2 == 0 ? true : false;
//   return $result;

//  }
//  echo is_even(6) ? "Even" : "Odd";
//  function happy_birthday($first_name){
//    echo "Hello {$first_name}";
//  }
//  happy_birthday("Jazeer");
  //   if(isset($_POST['submit'])){
   
  //     $foods = $_POST["foods"] ;
  //     foreach($foods as $food){
  //        echo "<p>You like $food.</p>";
  //   }
  //  }

//  if(isset($_POST['submit'])){
//    if(isset($_POST['pizza'])){
//       echo "<p>You like Pizza.</p>";
//    }
//    if(isset($_POST['hamburger'])){
//       echo "<p>You like Hamburger.</p>";
//    }
//    if(isset($_POST['hotdog'])){
//       echo "<p>You like Hotdog.</p>";
//    }
//    if(isset($_POST['taco'])){
//       echo "<p>You  like Taco.</p>";
//    }
//    if(empty($_POST['pizza'])){
//       echo "<p>You DON'T like Pizza.</p>";
//    }
//    if(empty($_POST['hamburger'])){
//       echo "<p>You DON'T like Hamburger.</p>";
//    }
//    if(empty($_POST['hotdog'])){
//       echo "<p>You DON'T like Hotdog.</p>";
//    }
//    if(empty($_POST['taco'])){
//       echo "<p>You DON'T like Taco.</p>";
//    }
//  }
//  if(isset($_POST['confirm'])){
//    $credit_card = "null";

//    if(isset($_POST['credit_card'])){
//       $credit_card = $_POST['credit_card'];
//       // echo $credit_card;

//    } 
//    if($credit_card == "visa"){
//       echo "<p>You selected Visa.</p>";
//    } elseif($credit_card == "mastercard"){
//       echo "<p>You selected MasterCard.</p>";
//    } elseif($credit_card == "American Express"){
//       echo "<p>You selected American Express.</p>";
//    } else {
//       echo "<p>Please select a credit card.</p>";
//    }


//  };
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

   // foreach($_POST as $key => $value){
   //    echo "<p>$key : $value</p>";
   // }

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