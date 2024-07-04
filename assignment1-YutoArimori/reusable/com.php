<?php 
$connect = mysqli_connect('localhost', 'root', 'root', 'short_term_retal_app');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }