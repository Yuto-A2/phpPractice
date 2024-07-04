<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="css/add.css">
  <script src="js/add.js"></script>
</head>
<body>
<?php 
      require('reusable/com.php');
      //SELECT guest's information and checkin date, checkout date in reservation table.
      $query = 'SELECT guest.guest_id, guest.fname, guest.lname, guest.phone_num, guest.email, reservation.start_day, reservation.end_day, reservation.created_day, property.property_type FROM guest JOIN reservation ON guest.guest_id = reservation.guest_id JOIN property ON property.property_id = reservation.property_id';
      $property = mysqli_query($connect, $query);
      $today = date('Y-m-d');
  ?>  
 <?php include('reusable/nav.php'); ?>
 <h2>Booking</h2>
 <!-- application form -->
 <form class="applicationForm" action="inc/addbooking.php" method="POST">
  <div class="container1">
   <label for="fname">First Name:</label>
   <input type="text" class="form-control" id="fname" name="fname"><span class="emptyfname"></span>
  </div>
  <div class="container2">
   <label for="lname">Last Name:</label>
   <input type="text" class="form-control" id="lname" name="lname"><span class="emptylname"></span>
  </div>
  <div class="container3">
   <label for="phone_num">Phone Number:</label>
   <input type="tel" class="form-control" id="phone_num" name="phone_num"><span class="emptyPhoneNum"></span>
  </div>
  <div class="container4">
   <label for="email">Email:</label>
   <input type="mail" class="form-control" id="email" name="email"><span class="emptymail"></span>
  </div>
  <div class="container5">
   <label for="start_day">Checkin:</label>
   <input type="date" class="form-control" id="start_day" name="start_day"><span class="emptyStartDate"></span>
  </div>
  <div class="container6">
   <label for="end_day">Checkout:</label>
   <input type="date" class="form-control" id="end_day" name="end_day"><span class="emptyEndDate"></span>
  </div>
  <div class="container7">
   <label for="created_day">Today:</label>
   <input type="date" class="form-control" id="created_day" name="created_day" value="<?php echo $today; ?>">
  </div>
  <button type="submit" class="btn">Submit</button>
  <!-- When I hide "created day", the data won't be sent to the database -->
   <!-- I don't want to show today's date, but I want to send the date to database.  -->
</form>  
 <?php include('reusable/footer.php'); ?> 
</body>
</html>
