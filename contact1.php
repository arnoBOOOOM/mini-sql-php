<?php

if($_POST) {
    $department //afspraak
    $visitor_name = ""; //naam
    $visitor_email = ""; //email
    $car_merk = ""; //merk
    $car_model = ""; //model
    $car_jaar = ""; //jaar
    $visitor_message = ""; //bericht
    $messagetot = "";

    if(isset($_POST['afspraak'])) {
        $department = filter_var($_POST['afspraak'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['naam'])) {
        $visitor_name = filter_var($_POST['naam'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['merk'])) {
        $car_merk = filter_var($_POST['merk'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['model'])) {
        $car_merk = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['jaar'])) {
        $car_merk = filter_var($_POST['jaar'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['bericht'])) {
        $visitor_message = htmlspecialchars($_POST['bericht']);
    }


    $recipient = "devolderarno@outlook.com";
    $messagetot = "$car_merk + $car_model + $car_jaar + $visitor_message";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    if(mail($recipient, $email_title, $messagetot, $headers)) {
        echo "<p>Bedankt voor ons te contacteren, $visitor_name. Je zult antwoord krijgen binnend de 24uur!</p>";
    } else {
        echo '<p>Sorry maar de email is niet verzonden probeer aub opnieuw.</p>';
    }

} else {
    echo '<p>Error aub herstart!</p>';
}

?>
