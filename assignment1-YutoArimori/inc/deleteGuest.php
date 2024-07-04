<?php
require('../reusable/com.php');
$id = $_GET['id'];

$query = "DELETE FROM reservation WHERE guest_id = '$id'" ;
$reservation = mysqli_query($connect, $query);

$query2 = "DELETE FROM guest WHERE guest_id = '$id'";
$guest = mysqli_query($connect, $query2);

if($guest && $reservation){
    header('Location: ../guest.php');
}else{
    echo "Failed: " . mysqli_error($connect);
}

//When I used JOIN this message appeared "Failed: Cannot delete or update a parent row: a foreign key constraint fails (short_term_retal_app.reservation, CONSTRAINT reservation_ibfk_2 FOREIGN KEY (guest_id) REFERENCES guest (guest_id))"
//How could I solve it?