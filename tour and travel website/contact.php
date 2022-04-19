<?php

   $connection = mysqli_connect('localhost','root','','tour_travels');

   if(isset($_POST['send'])){
      $name = $_POST['Name'];
      $email = $_POST['email'];      
      $number = $_POST['number'];
      $subject = $_POST['subject'];
      $massage = $_POST['massage'];

      $request = " insert into contact(Name, email, number, subject, massage) values('$name','$email','$number','$subject','$massage') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>