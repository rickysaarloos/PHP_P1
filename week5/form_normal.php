<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vliegtuigen</title>
</head>
<body>
    <form action="process_form.php" method="POST">
        <label for="name">Naam vliegtuig</label>
<input type="text" id="name" name="name">


<label for="available">ja</label>
<input type="radio" name="available" id="available" value="Ja">
<label for="available">nee</label>
<input type="radio" name="available" id="available" value="Nee">


<label for="stock">Voorraad</label>
<input type="number" id="stock" name="stock">


<input type="submit" name="submit_form" value="Toevoegen">


</form>



</body>
</html>