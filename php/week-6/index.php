<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="check.php" method="POST">

<label for="name">Gebruikersnaam</label> <br>
<input type="text" id="name" name="name" required> <br><br>
 
<label for="email">E-mail</label> <br>
<input type="email" id="email" name="email" required> <br><br>

<label for="message">Bericht</label> <br> 
<input type="text" id="message" name="message"> <br><br>

<input type="submit" name="submit_form" value="Versturen">

<?php

$name = $_POST["name"]
$email = $_POST["email"]
$message = $_POST["message"]

?>

</body>
</html>