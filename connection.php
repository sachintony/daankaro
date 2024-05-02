<?php
$host = "localhost";
$username = "root";
$password = " ";
$database = "daankaro";

$conn = new mysqli($host, $username, $password, $database,3307);
// Establishes connection with the database
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>