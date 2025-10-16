<?php
require_once '../config/loader.php';

# ---  Daten abrufen ---
$array = findAll('pokemon');
?>

<!doctype html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Pokémon Liste</title>
</head>
<body>
<h1>Pokédex</h1>
<?= createPokemonTable($array) ?>
</body>
</html>
