<?php

use classes\DB;

require "../classes/DB.php";

$queryPokemonName = isset($_GET["nomePokemon"]) ? $_GET["nomePokemon"] : "";
$queryItemName = isset($_GET["nomeItem"]) ? $_GET["nomeItem"] : "";
$queryMoveName = isset($_GET["moveName"]) ? $_GET["moveName"] : "";
if ($queryPokemonName) {
    $risultato = (new classes\DB)->getpokemonHint($queryPokemonName);
    echo $risultato;
}
if($queryItemName){
    $risultato = (new classes\DB)->getItemHint($queryItemName);
    echo $risultato;
}

if($queryMoveName){
    $pokemonName = isset($_GET["pokemonName"]) ? $_GET["pokemonName"] : "";
    $risultato = (new classes\DB)->getMovesHint($queryMoveName, $pokemonName);
    echo $risultato;
}

?>
