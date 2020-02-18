<?php
//databank connecteren linken

include_once 'dbconect.php';

//insert data variablen

$merk = mysqli_real_escape_string($conn, $_POST['1']);
$model = mysqli_real_escape_string($conn, $_POST['2']);
$bouwjaar = mysqli_real_escape_string($conn, $_POST['3']);
$brandstof = mysqli_real_escape_string($conn, $_POST['4']);
$kleur = mysql_real_escape_string($conn,$_POST['5']);
$merk2 = mysqli_real_escape_string($conn, $_POST['6']);
$model2 = mysqli_real_escape_string($conn, $_POST['7']);
$bouwjaar2 = mysqli_real_escape_string($conn, $_POST['8']);
$brandstof2 = mysqli_real_escape_string($conn, $_POST['9']);
$kleur2 = mysql_real_escape_string($conn,$_POST['10']);
$km2 = mysql_real_escape_string($conn,$_POST['11']);
//sql command uitvoeren

$sql = "INSERT INTO nieuwewagens (merk, model, bouwjaar, brandstof, kleur) VALUES ('$merk', '$model', '$bouwjaar', '$brandstof', '$kleur')";
$sql = "INSERT INTO tweedehandswagens (merk, model, bouwjaar, brandstof, kleur, aantalKilometer) VALUES ('$merk2', '$model2', '$bouwjaar2', '$brandstof2', '$kleur2' ,'$km2')";

if(mysqli_query($conn, $sql) == TRUE) {

//confermation in link
header("location: admin.php?inschrijving=geslaagd");

$conn->close();


 ?>
