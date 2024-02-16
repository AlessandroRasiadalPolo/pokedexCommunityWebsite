var tableCreated = false;
var pokemons = [];
var clickedButton = 0;
function showPokemon(pokemonName) {
    if (pokemonName === "") {
        document.getElementById("pokemonNameTxt").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);
                let risposte = JSON.parse(this.responseText);
                if (!tableCreated) {
                    createTable(); // Crea la tabella solo se non è già stata creata
                    tableCreated = true; // Imposta il flag a true dopo la creazione della tabella

                    // Aggiungi l'evento click alla tabella solo dopo che la tabella è stata creata
                    document.getElementById("pokemonTable").addEventListener("click", clickPokemon);
                }
                // Aggiorna la tabella con i nuovi dati
                updateTable(risposte);
            }
        };
        xmlhttp.open("GET", "../../pages/methods.php?q=" + pokemonName, true);
        xmlhttp.send();
    }
}


function createTable() {
    let div = document.createElement("div");
    div.style.width = "100%";
    div.style.height = "100%";

    let table = document.createElement("table");
    table.style.border = "1px solid white";
    table.style.width = "40%";
    table.style.height = "100%";
    table.id = "pokemonTable";

    // Creazione dell'intestazione della tabella
    let headerRow = table.createTHead().insertRow();
    headerRow.innerHTML = "<th>Sprite</th>" +
        "<th>Nome</th>" +
        "<th>Abilità</th>" +
        "<th>TipoPrimario</th>" +
        "<th>TipoSecondario</th>" +
        "<th>PS</th>" +
        "<th>Atk</th>" +
        "<th>Def</th>" +
        "<th>SAtk</th>" +
        "<th>SDef</th>" +
        "<th>Spe</th>";
    headerRow.style.color = "white";

    // Creazione del corpo della tabella
    let tbody = document.createElement("tbody");
    table.appendChild(tbody);

    div.appendChild(table);
    document.getElementById("bodyPage").appendChild(div);
}

function updateTable(data) {
    let tableBody = document.getElementById("pokemonTable").getElementsByTagName("tbody")[0];
    tableBody.innerHTML = ""; // Pulisci il corpo della tabella
    // Aggiungi i nuovi dati alla tabella
    iconrow = "https://play.pokemonshowdown.com/sprites/dex/";
    data.forEach(function(pokemon) {
        let row = tableBody.insertRow();
        newurl = iconrow+ pokemon.pokemonName.toLowerCase() + ".png";
        row.innerHTML = "<td>" +
            "<img src=\"" + newurl + "\" class = 'imgTable'>\n</td>" +
            "<td>" + pokemon.pokemonName + "</td>" +
            "<td>" + pokemon.ability + "</td>" +
            "<td>" + pokemon.primaryType + "</td>" +
            "<td>" + pokemon.secondaryType + "</td>" +
            "<td>" + pokemon.PS + "</td>" +
            "<td>" + pokemon.atk + "</td>" +
            "<td>" + pokemon.def + "</td>" +
            "<td>" + pokemon.SAtk + "</td>" +
            "<td>" + pokemon.SDef + "</td>" +
            "<td>" + pokemon.spe + "</td>";
    });

}

// Funzione per aggiungere un nuovo Pokémon alla squadra
document.addEventListener("DOMContentLoaded", function() {

document.getElementById("buttonAddPokemon").addEventListener("click", function() {
    if(pokemons.length !== 6) {
        // Aggiungi un nuovo Pokémon all'array
        let newPokemon = {
            name: document.getElementById("nomePokemonTxt").value,
            ability: document.getElementById("abilityName").value,
            image: document.getElementById("imageId").src,
            ps: parseInt(document.getElementById("hpDiv").style.width),
            atk: parseInt(document.getElementById("atkDiv").style.width),
            def: parseInt(document.getElementById("defDiv").style.width),
            SAtk: parseInt(document.getElementById("spaDiv").style.width),
            SDef: parseInt(document.getElementById("spdDiv").style.width),
            spe: parseInt(document.getElementById("speDiv").style.width)
        };
        pokemons.push(newPokemon);

        // Crea un nuovo pulsante per il nuovo Pokémon
        let newButton = document.createElement("button");
        newButton.className = "buttonList";
        newButton.textContent = newPokemon.name;

        // Aggiungi l'indice del Pokémon come attributo personalizzato
        newButton.dataset.index = pokemons.length - 1;

    // Aggiungi l'evento click al nuovo pulsante
    newButton.addEventListener("click", function() {
        let pokemonIndex = parseInt(this.dataset.index);
        let pokemon = pokemons[pokemonIndex];
        updatePokemonDetails(pokemon);
        console.log("Pokemon cliccato:", pokemonIndex);
        clickedButton = pokemonIndex;
    });

        // Inserisci il nuovo pulsante prima del pulsante "Aggiungi Pokémon"
        let addButton = document.getElementById("buttonAddPokemon");
        addButton.parentNode.insertBefore(newButton, addButton);
    }
    else
        document.getElementById("buttonAddPokemon").style.display = "none";
});
    });
function updatePokemonDetails(pokemon) {
    document.getElementById("hpDiv").style.width = pokemon.ps + "px";
    document.getElementById("atkDiv").style.width = pokemon.atk + "px";
    document.getElementById("defDiv").style.width = pokemon.def + "px";
    document.getElementById("spaDiv").style.width = pokemon.SAtk + "px";
    document.getElementById("spdDiv").style.width = pokemon.SDef + "px";
    document.getElementById("speDiv").style.width = pokemon.spe + "px";
    document.getElementById("imageId").src = pokemon.image;
    document.getElementById("nomePokemonTxt").value = pokemon.name;
    document.getElementById("abilityName").value = pokemon.ability;
}

function addAnotherPokemon() {

}

function clickPokemon(event) {

    let newPokemon = {};
    let row = event.target.closest("tr");
    if (row && row.rowIndex !== 0) { // Controlla se la riga è valida e non è l'intestazione
        let cells = row.getElementsByTagName("td");
        newPokemon.ps = parseInt(cells[5].textContent);
        newPokemon.atk = parseInt(cells[6].textContent);
        newPokemon.def = parseInt(cells[7].textContent);
        newPokemon.SAtk = parseInt(cells[8].textContent);
        newPokemon.SDef = parseInt(cells[9].textContent);
        newPokemon.spe = parseInt(cells[10].textContent);
        newPokemon.name = cells[1].textContent.toLowerCase();
        newPokemon.image = "https://www.smogon.com/dex/media/sprites/xy/" + newPokemon.name  + ".gif";
        newPokemon.ability = cells[2].textContent;

        document.getElementById("hpDiv").style.width = newPokemon.ps + "px";
        document.getElementById("atkDiv").style.width = newPokemon.atk + "px";
        document.getElementById("defDiv").style.width = newPokemon.def + "px";
        document.getElementById("spaDiv").style.width = newPokemon.SAtk + "px";
        document.getElementById("spdDiv").style.width = newPokemon.SDef + "px";
        document.getElementById("speDiv").style.width = newPokemon.spe + "px";
        document.getElementById("imageId").src = newPokemon.image;
        document.getElementById("nomePokemonTxt").value = newPokemon.name;
        document.getElementById("abilityName").value = newPokemon.ability;
        pokemons[clickedButton] = newPokemon;
        document.getElementById("pokemonList").querySelectorAll("button")[clickedButton].textContent = newPokemon.name;
    }
}





function changeInformation(){

}

function showItem(itemName){

}

function showAbility(abilityName){

}
function showMove(moveName){

}