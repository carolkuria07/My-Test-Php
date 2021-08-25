<?php
$username = "root";
$host = "localhost";
$password = "";
$database = "Morning_Test_System";

$connection = mysqli_connect($host,$username,$password,$database);

//Check if the connection to the DB was denied to stop the process
if (!isset($connection)){
    die("Connection to the database failed");
}