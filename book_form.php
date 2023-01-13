<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      //$request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      //mysqli_query($connection, $request);

      //header('location:book.php');
      header("location:https://api.whatsapp.com/send?phone=087777214369&text=Name:%20$name%20%0DEmail:%20$email%20%0DAddress:%20$address%20%0DLocation:%20$location%20%0DGuests:%20$guests%20%0DArrivels:%20$arrivals%20%0DLeaving:%20$leaving");

   }else{
      echo 'something went wrong please try again!';
   }

?>