<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vliegtuigen</title>
</head>
<body>

<form action="process_form.php" method="POST">

<label for="name">Naam</label> <br>
<input type="text" id="name" name="name"> <br><br>

<label for="available">Ja</label>
<input type="radio" id="available" name="available" value="Ja">
 
<label for="available">Nee</label>
<input type="radio" id="available" name="available" value="Nee"> <br><br>

<label for="stock">Voorraad</label>
<input type="number" id="stock" name="stock">

<input type="submit" name="submit_form" value="Toevoegen">

</form>
    


</body>
</html>