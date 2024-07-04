<!-- localhost/HTTP5225/assignment1-YutoArimori -->
<!-- https://open.toronto.ca/dataset/short-term-rentals-registration/ -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Short Term Rentals Registration App</title>
  <link rel="stylesheet" href="css/index.css">
  
  
</head>
<body>
  <?php include('reusable/nav.php'); ?>
  <h2>Property Address</h2>
  <?php 
      include('inc/functions.php');
      require('reusable/com.php'); 
      $query = 'SELECT * FROM property';
      $properties = mysqli_query($connect, $query);
  ?>
  <?php
   foreach($properties as $property){
    echo 
    //Shows property's addresses and property type in the database.
    '<div class="propertyContainer">
      <div class="containerBox">
       <p>' . $property['address'] . '</p> 
       <p>' . $property['property_type'] . '</p>
      </div>  
       <form method="GET">
        <input type="hidden" name="property_id" value="' . $property['property_id']. '">
        <button type="submit" class="btn">Booking</button>
       </form>
     </div>';//</propertyContainer>
   }
  ?>
  <?php include('reusable/footer.php'); ?>  

</body>
</html>