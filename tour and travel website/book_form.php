<?php

   $connection = mysqli_connect('localhost','root','','tour_travels');

   if(isset($_POST['send'])){
      $name = $_POST['Name'];
      $destination = $_POST['Destination'];      
      $guests = $_POST['guests'];
      $arrivals = $_POST['Arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(Name, Destination, guests, Arrivals, leaving) values('$name','$destination','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>