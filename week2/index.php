<!--localhost/HTTP5225/week2-->
<!--https://placehold.co/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <script>
    document.write("Hello");
   </script>

   <?php
   echo "<h1>Welcome to HTTP5225</h1>";
   ?>
    <?php
   echo '<p>Let\'s learn together;</p>';
   ?>
   
   <?
   echo
   "<ul>
    <li>PHP</li>
    <li>Laravel</li>
   </ul>"
   ?>

   <?
   echo '<p><img src="https://placehold.co/600x400" alt=""></p>'
   ?>

   <?php
   $name [ "fname" ] = "Yuto";
   $name [ "lname" ]= "Arimori";

   //$name = array ["Yuto" . "Arimori"];
   //$name[0];

   echo "Hello " . $name["fname"] . " " . $name["lname"];
   ?>
</body>
</html>
