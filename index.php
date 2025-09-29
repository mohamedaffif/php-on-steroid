<?php
echo " I LOVE PISSA <br>";
echo " I LIKE PISSA";
echo " I HATE PISSA <br>";
echo "I LOVE BARCELONA"; 
// This is a comment 
/* this 
is 
a multiline comment 
*/

// $_GET, $_POST = special variables used to collect data from an 
//         HTML data is sent to the file in the action attribute of <form?
//         <form action="some_file.php" method="get/post"> 

//$_GET = Data is appended to the url 
//        NOT SECURE 
//        char limit 
//         Bookmark is possible w/ values
//         Get request can be cached
//         Better for a search page 
//$_POST = Dataa is packaged inside the body of the http request
//   MORE SECURE 
//   NO DATA LIMIT 
// CAN NOT BOOKMARK
// GET request is not cached
// better for submiting credential data
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <br>
    <button>order pizza</button>
 </body>
 </html>