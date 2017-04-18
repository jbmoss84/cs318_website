<?php
  $url = "index.html";

if(isset($_POST['submit'])){
    $to = "james@letsbyjames.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header("Location:" . $url);# code...
  } else {
    echo "Whoops! Something went wrong... Please try again!"
    header("Location:" . $url);# code...
  }

?>
