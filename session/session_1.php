<?php
session_start();

$_SESSION['username'] = 'john_doe';
$_SESSION['email']='john_doe@example.com';

$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo"Username:".$username."<br>";
echo"Email:".$email."<br>";

if (true)
    header("Loction: http://www.google.com");

session_destroy();
?>