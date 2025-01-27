<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>

</head>
<body>
    <h1>Registratieformulier</h1>
    <form action="/submit" method="post">
        <!-- Gebruikersnaam -->
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" minlength="3" maxlength="15" required>
<br><br>
        <!-- E-mailadres -->
        <label for="email">E-mailadres:</label>
        <input type="email" id="email" name="email" required>
<br><br>
        <!-- Wachtwoord -->
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" minlength="6" required>
<br><br>
        <!-- Geslacht -->
        <label>Geslacht:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Man</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Vrouw</label>
<br><br>
        <!-- Land -->
        <label for="country">Land:</label>
        <select id="country" name="country" required>
            <option value="">-- Kies een land --</option>
            <option value="nederland">Nederland</option>
            <option value="belgie">België</option>
            <option value="duitsland">Duitsland</option>
            <option value="frankrijk">Frankrijk</option>
        </select>
<br><br>
        <!-- Verzenden -->
        <button type="submit">Registreren</button>
    </form>
</body>
</html>
