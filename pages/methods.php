<?php

use classes\DB;

require "../classes/DB.php";

$queryPokemonName = isset($_GET["nomePokemon"]) ? $_GET["nomePokemon"] : "";
$queryItemName = isset($_GET["nomeItem"]) ? $_GET["nomeItem"] : "";
if ($queryPokemonName) {
    $risultato = (new classes\DB)->getpokemonHint($queryPokemonName);
    echo $risultato;
}
if($queryItemName){
    $risultato = (new classes\DB)->getItemHint($queryItemName);
    echo $risultato;
}

?>
