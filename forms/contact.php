<?php

if(isset($_POST['submit'])) {
  $name   = $_POST['name'];
  $email   = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  $mailTo = "admin@peakedgaming.com";
  $head = "From: ".$email;
  $contact = "New Contact Form Submission From: ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $head);
  header("Location: index.php?contactformsubmit")
}
