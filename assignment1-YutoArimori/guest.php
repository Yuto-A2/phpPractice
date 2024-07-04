<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/guest.css">
    <title>Guest page</title>
</head>
<body>
<?php include('reusable/nav.php'); ?>
  <h2>Guest page</h2>
  <?php 
      include('inc/functions.php');
      require('reusable/com.php'); 
      $query = 'SELECT guest.guest_id, guest.fname, guest.lname, guest.phone_num, guest.email, reservation.start_day, reservation.end_day, reservation.created_day FROM guest JOIN reservation ON guest.guest_id = reservation.guest_id';
      $guests = mysqli_query($connect, $query);
  ?>
<?php
   foreach($guests as $guest){
    echo 
    // Shows guest names, checkin dates, checkout dates.
    // Users can delete guest's information.
    '<table>
      <tr>
        <th>Guest Name</th>
        <th>Check in date</th>
        <th>Check out date</th>
        <th>Delete</th>
      </tr>
      <tr>
        <td>' . $guest['fname'] . ' ' . $guest['lname'] . '</td>
        <td>' . $guest['start_day'] . '</td>
        <td>' . $guest['end_day'] . '</td>
        <td>
          <form action="inc/deleteGuest.php" method="GET">
            <input type="hidden" name="id" value="' . $guest['guest_id'] . '">
            <button type="submit" class="btn">Delete</button>
          </form>
        </td>
    </table>';
   }
  ?>
  <?php include('reusable/footer.php'); ?> 
</body>
</html>