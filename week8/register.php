<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = htmlspecialchars($_SESSION['username']);
    echo "<h1>Welkom, $username!</h1>";
    echo '<a href="index.php">Uitloggen</a>';
} else {
    echo "<h1>U moet zich registreren.</h1>";
    echo '<a href="index.php">Ga naar het registratieformulier</a>';
}
?>