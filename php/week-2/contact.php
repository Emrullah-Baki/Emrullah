<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include 'navbar.php'?>

<label for="Lname">Voornaam</label> <br>
<input type="text" id="Lname" name="Lname" pattern="[A-Z-a-z]" title="Geen cijfers toegestaan"> <br><br>

<label for="Lmail">E-mail</label> <br>
<input type="text" id="Lmail" name="Lmail"> <br><br>

<label for="Lmessage">Bericht</label> <br>
<input type="text" id="Lmessage" name="Lmessage"> <br><br>

<button>Verzenden</button>

<?php include 'footer.php'?>

</body>
</html>