<?php

   // $connection = mysqli_connect('localhost','root','','book_db');

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

      $text = "Name:%20$name%0a";
      $text .= "Email:%20$email%0a";
      $text .= "Address:%20$address%0a";
      $text .= "Location:%20$location%0a";
      $text .= "Guests:%20$guest%0a";
      $text .= "Arrivels:%20$arrivals%0a";
      $text .= "Leaving:%20$leaving";

      //header('location:book.php');
      header("location:https://api.whatsapp.com/send?phone=087777214369&text=$text");

   }else{
      echo 'something went wrong please try again!';
   }

?>