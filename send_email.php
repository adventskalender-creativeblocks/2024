<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {
        $to = "maurin12@bluewin.ch";
        $subject = "Neue Adventskalender-Teilnahme";
        $message = "Die folgende E-Mail-Adresse hat am Adventskalender teilgenommen:\n\n$email";
        $headers = "From: maurin12@bluewin.ch";

        if (mail($to, $subject, $message, $headers)) {
            echo "Ihre E-Mail-Adresse wurde erfolgreich übermittelt.";
        } else {
            echo "Es gab ein Problem beim Senden der E-Mail. Bitte versuchen Sie es später erneut.";
        }
    } else {
        echo "Ungültige E-Mail-Adresse.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
