<?php
$uur = date("G");

if ($uur >= 6 && $uur < 12) {
    echo "Het is ochtend.";
} elseif ($uur >= 12 && $uur < 18) {
    echo "Het is middag.";
} elseif ($uur >= 18 && $uur < 24) {
    echo "Het is avond.";
} else {
    echo "Het is nacht.";
}

echo "<br>";
echo "<br>";
?>

<?php
$uur = date("G");

$dagdeel = match (true) {
    $uur >= 6 && $uur < 12 => "Het is ochtend.",
    $uur >= 12 && $uur < 18 => "Het is middag.",
    $uur >= 18 && $uur < 24 => "Het is avond.",
    default => "Het is nacht.",
};

echo $dagdeel;
?>