<?php
  $field_name = $_POST['cfName'];
  $field_email = $_POST['cfEmail'];
  $field_phone = $_POST['cfBudget'];
  $field_message = $_POST['cfMessage'];

  // This prevents emails to end up in the SPAM folder...
  $field_sender = 'santiago@santz.co';

  $mail_to = 'santiago@santz.co';
  $subject = 'New message via #Santz from '.$field_name;

  $body_message = 'From: '.$field_name."\n";
  $body_message .= 'Email: '.$field_email."\n";
  $body_message .= 'Budget: '.$field_phone."\n";
  $body_message .= 'Message: '.$field_message;

  $headers = 'From: '.$field_sender."\r\n";
  $headers .= 'Reply-To: '.$field_email."\r\n";

  $mail_status = mail($mail_to, $subject, $body_message, $headers);
?>