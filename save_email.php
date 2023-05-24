<?php
var_dump($_POST)
$email = $_POST['email']; // Retrieve the email address from the form data

$file = '/home/salik/Desktop/Ghostwind-master/email.txt'; // Path to the file where the emails will be stored

// Save the email address to the file
file_put_contents($file, $email , "\n", FILE_APPEND | LOCK_EX);

echo ("Email saved successfully!");
?>
