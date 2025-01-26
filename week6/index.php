<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Naam 
        if (empty($_POST["name"])) {
            $nameErr = "Naam is verplicht.";
        } elseif (strlen($_POST["name"]) < 3) {
            $nameErr = "Naam moet minimaal 3 tekens lang zijn.";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }
    
         // E-mailadres
         if (empty($_POST["email"])) {
            $emailErr = "E-mailadres is verplicht.";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Ongeldig e-mailadres.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

         
         if (empty($_POST["message"])) {
            $messageErr = "Bericht is verplicht.";
        } elseif (strlen($_POST["message"]) < 10) {
            $messageErr = "Bericht moet minimaal 10 tekens lang zijn.";
        } else {
            $message = htmlspecialchars($_POST["message"]);
        }
    }
    ?>

<h1>Contactformulier</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <label for="message">Bericht:</label><br>
        <textarea id="message" name="message" rows="5" cols="30"><?php echo $message; ?></textarea>
        <span class="error">* <?php echo $messageErr; ?></span>
        <br><br>

        <input type="submit" value="Verzenden">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$messageErr) {
        echo "<h2>Uw ingevoerde gegevens:</h2>";
        echo "Naam: " . $name . "<br>";
        echo "E-mailadres: " . $email . "<br>";
        echo "Bericht: " . nl2br($message) . "<br>";
    }
    ?>


</body>
</html>