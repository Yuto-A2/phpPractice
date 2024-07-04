<?php
  include('functions.php');

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone_num'];
  $email = $_POST['email'];
  $start = $_POST['start_day'];
  $end = $_POST['end_day'];
  $today = $_POST['created_day'];

  require('../reusable/com.php');

  // Insert query for guest table.
  $query = "INSERT INTO guest (
              `fname`, 
              `lname`, 
              `phone_num`, 
              `email`) 
            VALUES (
              '" . mysqli_real_escape_string($connect, $fname) . "',
              '" . mysqli_real_escape_string($connect, $lname) . "',
              '$phone', 
              '$email')";

  $guest = mysqli_query($connect, $query);
  if($guest) {
  $guest_id = mysqli_insert_id($connect);

  // Insert query for reservation table. 
  $query2 = "INSERT INTO reservation (
               `guest_id`,
               `start_day`,
               `end_day`,
               `created_day`)
               VALUES (
               '$guest_id',
               '$start',
               '$end',
               '$today')";
               
// When the data is added, the page moves to guest.php.
  $reservation = mysqli_query($connect, $query2);
  if($reservation){
    set_message('added successfully!');
    header('Location: ../guest.php');
  }else{
    echo "Failed: " . mysqli_error($connect);
  }
} 