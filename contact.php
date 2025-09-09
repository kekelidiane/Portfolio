<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $objet = htmlspecialchars($_POST["objet"]);
    $message = htmlspecialchars($_POST["message"]);

    // Adresse qui recevra les mails
    $to = "lucedia09@gmail.com"; 

    // Sujet du mail
    $subject = "Nouveau message depuis ton portfolio : $objet";

    // Corps du mail
    $body = "Nom: $nom\nPrénom: $prenom\nTéléphone: $telephone\n\nMessage:\n$message";

    // Headers (qui envoie)
    $headers = "From: $nom <$to>";

    // Envoi du mail
    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message envoyé avec succès, merci de m’avoir contacté !";
    } else {
        echo "❌ Erreur lors de l’envoi, veuillez réessayer.";
    }
}
?>
