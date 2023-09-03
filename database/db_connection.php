<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname="db_kampanat";
$port="3306";

$conn = mysqli_connect($severname, $username, $password, $dbname, $port);

if (!$conn){
    die("Connection failed:". mysqli_connect_error());
} else {
    // echo "Connection successfully";
}