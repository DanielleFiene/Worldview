<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  
  $to = 'daniellefiene@hotmail.com';

  $subject = 'Contact Form Submission';

  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  $message = 'First Name: ' . $fname . "\n" .
             'Last Name: ' . $lname . "\n" .
             'Email: ' . $email . "\n" .
             'Message: ' . $message;

  mail($to, $subject, $message, $headers);
  echo 'Thanks for contacting us!';
}
?>