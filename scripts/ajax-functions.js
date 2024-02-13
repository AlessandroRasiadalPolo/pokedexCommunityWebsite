function showPokemon(pokemonName){
    if (pokemonName === "") {
        document.getElementById("pokemonNameTxt").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let risposte = JSON.parse(this.responseText);
                for(let i = 1; i < risposte.length; i++)
                    risposta += risposte[i].Denominazione + "<br>";
                document.getElementById("divHint").innerHTML = JSON.stringify(risposta);
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