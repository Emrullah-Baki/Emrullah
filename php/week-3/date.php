<?php
$today = date("j F Y");
echo "Vandaag is het: $today";

echo "<br>";

$year = date("z") . "e";
echo "Vandaag is het de $year dag van het jaar";

echo "<br>";

$day = date("l");
$dag = date("w");
echo "$day is de $dag dag van de week";

echo "<br>";

$month = date("F");
$days = date("t");
echo "De maand $month heeft in totaal $days dagen";
?>