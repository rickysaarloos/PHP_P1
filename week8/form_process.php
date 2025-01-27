<?php
session_start();

$errors = [];


if (empty($_POST['username']) || strlen($_POST['username']) < 3 || strlen($_POST['username']) > 15) {
    $errors[] = "De gebruikersnaam moet tussen de 3 en 15 tekens lang zijn.";
}


if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Voer een geldig e-mailadres in.";
}


if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
    $errors[] = "Het wachtwoord moet minimaal 6 tekens lang zijn.";
}

if (empty($_POST['gender'])) {
    $errors[] = "Selecteer een geslacht.";
}


if (empty($_POST['country'])) {
    $errors[] = "Selecteer een land.";
}


if (!empty($errors)) {
    echo "<h3>Fouten bij het invullen van het formulier:</h3><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
    echo '<a href="index.php">Ga terug naar het formulier</a>';
    exit;
}

$_SESSION['username'] = htmlspecialchars($_POST['username']);
header("Location: register.php");
exit;
?>