<?php
$email = $_POST['email'];

if (!empty($email)) {
  $file = 'emails.txt';  // Replace with the desired file name or path

  // Append the email to the file
  file_put_contents($file, $email . "\n", FILE_APPEND | LOCK_EX);
}
?>