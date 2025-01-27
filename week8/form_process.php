if (empty($_POST['gender'])) {
    $errors[] = "Geslacht is verplicht.";
}

if (empty($_POST['country'])) {
    $errors[] = "Land is verplicht.";
}

if (!empty($errors)) {
    // Toon fouten en keer terug naar het formulier
    echo "<h1>Fouten gevonden:</h1>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
    echo "<a href=\"index.html\">Ga terug naar het formulier</a>";
} else {
    // Sla gebruikersnaam op in de sessie en stuur door naar de welkomstpagina
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header("Location: welcome.php");
    exit;
}
?>