<?php
if (isset($_POST['submit'])) {
  // Collect the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'deepanshur213@gmail.com';

  // Set the email subject
  $subject = 'New message from ' . $name;

  // Build the email message
  $message = 'Name: ' . $name . "\r\n\r\n";
  $message .= 'Email: ' . $email . "\r\n\r\n";
  $message .= 'Phone Number: ' . $number . "\r\n\r\n";
  $message .= 'Message: ' . $message . "\r\n\r\n";

  // Set the email headers
  $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
  $headers .= 'Reply-To: ' . $email . "\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    // If the email was sent successfully, redirect to a thank-you page
    header('Location: thankyou.html');
    exit;
  } else {
    // If there was an error sending the email, show an error message
    echo 'There was an error sending your message. Please try again later.';
  }
}
?>
