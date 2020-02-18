<?php
//databank connecteren linken

include_once 'dbconect.php';

//insert data variablen

$idcarn = mysql_real_escape_string($conn, $_POST['removenieuw']);
$idcar2 = mysql_real_escape_string($conn, $_POST['remove2']);

//sql command uitvoeren

$sql = "DELETE FROM nieuwewagens WHERE idnieuwewagens='$idcarn';";
$sql = "DELETE FROM tweedehandswagens WHERE idtweedehandswagens='$idcar2';";


if(mysqli_query($conn, $sql) == TRUE) {

//confermation in link
header("location: addremovecar.php?remove=geslaagd");

$conn->close();


 ?>
