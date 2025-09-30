
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

 <form action="index.php" method="post">
   <label>radius:</label>
   <input type="text" name="radius">
   <input type="submit" value="calculate">


 </form>
   

 </body>
 </html>

 <?php
 $radius = $_POST['radius'];
 
 $circumference = null;
 $circumference = 2 * pi() * $radius;

 $circumference = round($circumference, 2);

 $area = pi() * pow($radius, 2);
 $area = round($area, 2);
 $volume = null;

 $volume = (4/3) * pi() * pow($radius, 3);
   $volume = round($volume, 2);

//  $total = rand(1,6);

 echo "circumference:  = {$circumference}<br>";
 echo "Area:  = {$area}cm<sup>2</sup>";
 echo "Volume:  = {$volume}cm<sup>3</sup>";

 
 ?>