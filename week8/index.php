<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>

</head>
<body>
    <h1>Registratieformulier</h1>
    <form action="form_process.php" method="post">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" minlength="3" maxlength="15" required>
        <br><br>

        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" minlength="6" required>
        <br><br>

        <label>Geslacht:</label>
        <input type="radio" id="man" name="gender" value="man" required>
        <label for="man">Man</label>
        <input type="radio" id="vrouw" name="gender" value="vrouw">
        <label for="vrouw">Vrouw</label>
        <br><br>

        <label for="country">Land:</label>
        <select id="country" name="country" required>
            <option value="">Selecteer uw land</option>
            <option value="Nederland">Nederland</option>
            <option value="België">België</option>
            <option value="Duitsland">Duitsland</option>
            <option value="Frankrijk">Frankrijk</option>
        </select>
        <br><br>

        <button type="submit">Registreren</button>
    </form>



</body>
</html>
