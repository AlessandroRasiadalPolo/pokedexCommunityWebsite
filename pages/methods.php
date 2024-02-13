<?php

use classes\DB;

require "../classes/DB.php";

$query = isset($_GET["q"]) ? $_GET["q"] : "";
if ($query) {
    $risultato = getpokemonName(strtolower($query));
    echo $risultato;
}


function getpokemonName(){
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Controllo se è stato inviato il parametro pokemonName
    if (isset($_GET['pokemonName'])) {
        // Recupero il valore di pokemonName
        $pokemonName = $_POST['pokemonName'];

        // Eseguo il metodo della classe passando il nome del Pokemon
        $result = DB::getPokemonHint($pokemonName);

        // Restituisco il risultato della chiamata AJAX
        echo $result;
    }
}
}
?>
