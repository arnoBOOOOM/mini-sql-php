<?php

//variables
$servername = "localhost";
$username = "newuser";
$password = "123456789";
$dbname = "examen";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
/*
check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
echo "connected succesfully";
*/
 ?>
