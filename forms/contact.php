<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $email_from = 'mohammed@gmail.com';
  // $email_from = 'mohammed.mudassar18@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
  
  $to = "mohammed.mudassar18@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  // echo $contact->send();
?>
