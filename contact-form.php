<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "contact@greentech.com";  // À remplacer par votre adresse email
    $subject = "Message du site GreenTech";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Échec de l'envoi.";
    }
}
?>
