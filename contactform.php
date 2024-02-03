<?php>

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailform = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "sath50@hotmail.com";
  $headers = "From: ".$mailFrom
  $txt = "You have received an e-mail from".$name.".\n\n".$message;

 



  mail($mailTo,$txt,$headers);
  header("Location: index.php?mailsend");
}