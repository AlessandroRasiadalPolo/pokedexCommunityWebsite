<?php

use classes\DB;

require "../classes/DB.php";

$query = isset($_GET["q"]) ? $_GET["q"] : "";
if ($query) {
    $risultato = (new classes\DB)->getpokemonHint($query);
    echo $risultato;
}

?>
