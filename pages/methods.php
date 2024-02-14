<?php

use classes\DB;

require "../classes/DB.php";

$query = isset($_GET["q"]) ? $_GET["q"] : "";
if ($query) {
    $risultato = (new classes\DB)->getpokemonHint($query);
    echo $risultato;
}


/*if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Controllo se è stato inviato il parametro pokemonName
    if (isset($_GET['pokemonName'])) {
        // Recupero il valore di pokemonName
        $pokemonName = $_GET['pokemonName'];

        // Eseguo il metodo della classe passando il nome del Pokemon

        // Restituisco il risultato della chiamata AJAX
        echo $result;
    }
}
}*/
?>
