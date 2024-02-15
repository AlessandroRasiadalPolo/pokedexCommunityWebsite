var tableCreated = false;
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

window.addEventListener("load", function() {
    loadFirstElement();
});

function loadFirstElement(){
    // Ottieni il primo Pokémon presente nella pagina
    let pokemonName = document.getElementById("nomePokemonTxt").value; // Supponendo che l'elemento che contiene il nome del Pokémon abbia l'id "pokemonName"
    let ability = document.getElementById("abilityName").value; // Supponendo che l'elemento che contiene il nome dell'abilità abbia l'id "abilityName"

    // Aggiungi un pulsante al div "pokemonList" collegato al primo Pokémon
    addPokemonButton(pokemonName, ability);
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
function addPokemonButton(pokemonName, ability) {
    let divTeamList = document.getElementById("pokemonList");

    // Creazione del pulsante
    let newButton = document.createElement("button");
    newButton.textContent = pokemonName;
    newButton.dataset.pokemonName = pokemonName; // Salva il nome del Pokémon come attributo personalizzato
    newButton.dataset.ability = ability; // Salva l'abilità del Pokémon come attributo personalizzato

    // Aggiungi un evento click al pulsante per mostrare le informazioni del Pokémon
    newButton.addEventListener("click", function() {
        // Quando il pulsante viene cliccato, mostra le informazioni del Pokémon associato
        updatePokemonDetails(pokemonName, ability);
    });

    // Aggiungi il pulsante al div del team
    divTeamList.appendChild(newButton);

    // Aggiungi un pulsante "+" dopo il nuovo pulsante per aggiungere un altro Pokémon
    let buttonAdd = document.createElement("button");
    buttonAdd.innerHTML = "<i class='fas fa-plus-circle'></i>";
    buttonAdd.style.width = "100px";
    buttonAdd.style.height = "100%";
    buttonAdd.onclick = function() {
        // Aggiungiamo un altro Pokémon alla squadra
        addAnotherPokemon();
    };
    divTeamList.appendChild(buttonAdd);
}

function addAnotherPokemon() {

}

function clickPokemon(event) {

    let row = event.target.closest("tr");
    if (row && row.rowIndex !== 0) { // Controlla se la riga è valida e non è l'intestazione
        let cells = row.getElementsByTagName("td");
        let PS = parseInt(cells[5].textContent);
        let atk = parseInt(cells[6].textContent);
        let def = parseInt(cells[7].textContent);
        let SAtk = parseInt(cells[8].textContent);
        let SDef = parseInt(cells[9].textContent);
        let spe = parseInt(cells[10].textContent);

        document.getElementById("hpDiv").style.width = PS + "px";
        document.getElementById("atkDiv").style.width = atk + "px";
        document.getElementById("defDiv").style.width = def + "px";
        document.getElementById("spaDiv").style.width = SAtk + "px";
        document.getElementById("spdDiv").style.width = SDef + "px";
        document.getElementById("speDiv").style.width = spe + "px";
        document.getElementById("imageId").src = "https://www.smogon.com/dex/media/sprites/xy/" + cells[1].textContent.toLowerCase() + ".gif";
        document.getElementById("nomePokemonTxt").value = cells[1].textContent.toLowerCase();
        document.getElementById("abilityName").value = cells[2].textContent;
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