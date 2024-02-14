function showPokemon(pokemonName){
    if (pokemonName === "") {
        document.getElementById("pokemonNameTxt").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);
                let risposte = JSON.parse(this.responseText);
            }
        };
        xmlhttp.open("GET","../../pages/methods.php?q="+pokemonName,true);
        xmlhttp.send();
    }

}

function showItem(itemName){

}

function showAbility(abilityName){

}
function showMove(moveName){

}