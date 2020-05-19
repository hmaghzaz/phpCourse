<?php
/*
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$echelle = $_POST['echelle'];
$NumbreOfChild = $_POST['NumbreOfChild'];
$serviceLife = $_POST['serviceLife'];
$primeOne = $NumbreOfChild * 300;

if ($serviceLife >= 15) {
    $primeSeconde = 1500;
} else {
    $primeSeconde = 0;
}
if ($echelle == 11) {
    $salaireBase = 12000;
} elseif ($echelle == 10) {
    $salaireBase = 9000;
} else {
    $salaireBase = 6000;
}

$salaireNet = $primeOne + $primeSeconde + $salaireBase;

echo "nom ................... : $firstName <br>";
echo "prenom ................ : $lastName <br>";
echo "Prime 1 ............... : $primeOne <br>";
echo "Prime 2 ............... : $primeSeconde <br>";
echo "Salaire de base ....... : $salaireBase <br>";
echo "Salaire net ........... : $salaireNet <br>";
*/
var_dump($_POST);
