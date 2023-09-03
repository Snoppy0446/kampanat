<?php

require_once '../database/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO
        users
            (username,password,firstname,lastname,phone,email)
        VALUE
            ('$username','$password','$firstname','$lastname','$phone','$email')";
            if(mysqli_query($conn,$sql)){
                header ("Location:../admin/usershow.php");
                "New record created successfully.";
            } else {
                echo"Error:".$sql.'<br>'.mysqli_error($conn);
            }

            mysqli_close($conn);