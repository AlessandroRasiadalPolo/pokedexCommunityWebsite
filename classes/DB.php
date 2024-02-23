<?php

namespace classes;

use mysqli;

class DB
{

    private static function connection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "dbdexusers";

        $conn = new mysqli($servername, $username, $password, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;

    }

    public static function createNewUser($utente)
    {
        $conn = self::connection();
        $username = $utente['username'];
        $password = $utente['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $utente['email'];
        $sql = "INSERT INTO utente(Id, Email, password) VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        //il primo parametro specifica il tipo dei valori da passare
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            return true;
        } else {
            $stmt->close();
            $conn->close();
            return $conn->error;
        }


    }

    public static function loginUser($username, $password)
    {
        $conn = self::connection();
        $sql = "SELECT Id, password FROM utente";

        $result = $conn->query($sql);
        //Per un avvertimento di PHP preferisco specificare che devo controllare che il numero delle righe sia maggiore di 0
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['Id'] == $username && password_verify($password, $row['password']) == $password) {
                    $conn->close();
                    return 0;
                }

            }

        }
        $conn->close();
        return -1;

    }

    public static function createNewTeam()
    {

    }

    public static function deleteTeam()
    {

    }

    public static function modifyTeam()
    {

    }

    public static function getUserBadge()
    {
        $conn = self::connection();
        $badges[] = null;

        $sql = "SELECT * FROM Forma F INNER JOIN pokemonsquadra PS ON(F.NomeSquadra = PS.TeamName) GROUP BY F.NomeSquadra ORDER BY ASC";

        $result = $conn->query($sql);
        if ($result > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = row['IdUtente'];
                $teamName = row['NomeSquadra'];
                $firstPokemon = row[''];
                $badge = new UserBadge();
            }

        } else
            return $badges;
    }

    public function getPokemonHint($nome)
    {
        $conn = self::connection();

        //Tramite questa query ottengo tutti i dati che mi interessano
        $fullSql = "SELECT P.NomePokemon AS NP, P.PokedexId, P.NomeTipo1, P.NomeTipo2, P.Generazione, P.Icon, S.NomeAbilità, A.Effetto, ST.Atk, ST.Spe, ST.Def, ST.SAtk, ST.SDef, ST.PS  
                    FROM Pokemon AS P INNER JOIN Sviluppa AS S ON (P.NomePokemon = S.NomePokemon) 
                    INNER JOIN Abilità AS A ON (A.Nome = S.NomeAbilità) 
                    INNER JOIN Statistica AS ST ON(P.NomePokemon = ST.PokemonName) 
                    WHERE P.NomePokemon LIKE '" . $nome ."%' LIMIT 30";

        // Creo un array per memorizzare i pokemon
        $pokemonNames = array();
        $result = $conn->query($fullSql);
        // Ottengo già un risultato
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Creo un nuovo array associativo per ogni record
                $pokemon = array();
                $pokemon['pokemonName'] = $row['NP'];
                $pokemon['Id'] = $row['PokedexId'];
                $pokemon['primaryType'] = $row['NomeTipo1'];
                $pokemon['secondaryType'] = $row['NomeTipo2'];
                $pokemon['icon'] = $row['Icon'];
                $pokemon['ability'] = $row['NomeAbilità'];
                $pokemon['atk'] = $row['Atk'];
                $pokemon['def'] = $row['Def'];
                $pokemon['spe'] = $row['Spe'];
                $pokemon['SAtk'] = $row['SAtk'];
                $pokemon['SDef'] = $row['SDef'];
                $pokemon['PS'] = $row['PS'];

                // Aggiungo il nuovo array all'array principale
                $pokemonNames[] = $pokemon;
            }

            // I risultati che ottengo li inserisco all'interno dell' array

            $conn->close();

            //Ritorno un formato JSON da ritornare
            return json_encode($pokemonNames);

        }
        else
            return 0;
    }

    public function getItemHint($nome)
    {
        $conn = self::connection();

        //Tramite questa query ottengo tutti i dati che mi interessano
        $fullSql = "SELECT * FROM strumento S 
                    WHERE S.Nome LIKE '" . $nome ."%' LIMIT 30";

        // Creo un array per memorizzare gli strumenti
        $itemNames = array();
        $result = $conn->query($fullSql);
        // Ottengo già un risultato
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Creo un nuovo array associativo per ogni record
                $item = array();
                $item['Nome'] = $row['Nome'];
                $item['Effetto'] = $row['Effetto'];

                // Aggiungo il nuovo array all'array principale
                $itemNames[] = $item;
            }

            // I risultati che ottengo li inserisco all'interno dell' array

            $conn->close();

            //Ritorno un formato JSON da ritornare
            return json_encode($itemNames);

        }
        else
            return 0;
    }

    //Dovrò passare 2 parametri da javascript
    public function getMovesHint($nomeMossa, $nomePokemon){
        $conn = self::connection();

        //Tramite questa query ottengo tutti i dati che mi interessano
        $fullSql = "SELECT M.* FROM Impara I INNER JOIN Mossa M ON (M.Nome = I.NomeMossa)
            WHERE I.NomePokemon = '" . $nomePokemon . "' AND M.Nome LIKE '" . $nomeMossa . "%' LIMIT 30";


        // Creo un array per memorizzare gli strumenti
        $moves = array();
        $result = $conn->query($fullSql);
        // Ottengo già un risultato
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Creo un nuovo array associativo per ogni record
                $move = array();
                $move['Nome'] = $row['Nome'];
                $move['Effetto'] = $row['Effetto'];
                $move['PP'] = $row['Pp'];
                $move['Tipo'] = $row['Tipo'];
                $move['power'] = $row['Potenza'];
                $move['accuracy'] = $row['Precisione'];
                $move['priority'] = $row['Priorità'];
                $move['category'] = $row['Categoria'];

                // Aggiungo il nuovo array all'array principale
                $moves[] = $move;
            }

            // I risultati che ottengo li inserisco all'interno dell' array

            $conn->close();

            //Ritorno un formato JSON da ritornare
            return json_encode($moves);

        }
        else
            return 0;
    }

    public static function checkPokemonName($name)
    {
        $conn = self::connection();
        $sql = "SELECT NomePokemon From pokemon WHERE NomePokemon = ".$name;

        $result = $conn->query($sql);
        if($result -> num_rows > 0)
            return true;
        else
            return false;
    }
    public static function checkMove($moveName, $pokemonName)
    {
        $conn = self::connection();
        $sql = "SELECT M.* 
                FROM Mossa M 
                    INNER JOIN IMPARA I ON (I.NomeMossa = M.Nome) 
                    INNER JOIN Pokemon P ON (I.NomePokemon = P.NomePokemon) 
                WHERE P.NomePokemon ='". $pokemonName . "' AND M.Nome = ".$moveName;

        $result = $conn->query($sql);
        if($result -> num_rows > 0)
            return true;
        else
            return false;
    }

    public static function checkAbility($abilityName, $pokemonName)
    {
        $conn = self::connection();
        $sql = "SELECT P.NomePokemon 
            FROM Pokemon P 
                INNER JOIN Sviluppa AS S ON (P.NomePokemon = S.NomePokemon) 
                INNER JOIN Abilità AS A ON (A.Nome = S.NomeAbilità) 
            WHERE S.NomeAbilità = ? AND P.NomePokemon = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $abilityName, $pokemonName);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se ci sono righe restituite
        if ($result->num_rows > 0) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    public static function saveTeam($nomeTeam, $pokemons)
    {
        $conn = self::connection();
        $conn->autocommit(FALSE); // Disabilita l'autocommit per consentire il controllo manuale delle transazioni

        $sqlSquadra = "INSERT INTO Squadra(NomeSquadra) VALUES (?)";
        $stmtSquadra = $conn->prepare($sqlSquadra);
        $stmtSquadra->bind_param("s", $nomeTeam);

        if ($stmtSquadra->execute()) {
            $sqlPokemon = "INSERT INTO PokemonSquadra(TeamName, PokemonName, Strumento, Abilità, Mossa1, Mossa2, Mossa3, Mossa4, PS, ATK, DEF, SATK, SDEF, SPE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmtPokemon = $conn->prepare($sqlPokemon);

            foreach ($pokemons as $p) {
                $stmtPokemon->bind_param("ssssssssiiiiii", $nomeTeam,
                    $p["name"], $p['item'], $p['ability'],
                    $p['moves']['move1'], $p['moves']['move2'], $p['moves']["move3"], $p['moves']["move4"],
                    $p['ps'], $p['atk'], $p['def'], $p['SAtk'], $p['SDef'], $p['spe']
                );

                // Esegui lo statement e controlla se ci sono errori
                if (!$stmtPokemon->execute()) {
                    // Se ci sono errori, stampa il messaggio di errore
                    $error = $stmtPokemon->error;
                    echo $error;
                    // Rollback della transazione e uscita dalla funzione
                    $conn->rollback();
                    $stmtSquadra->close();
                    $stmtPokemon->close();
                    $conn->close();
                    return false;
                }
            }

            $sqlForma = "INSERT INTO Forma(IdUtente, NomeSquadra) VALUES(?, ?)";
            $stmtForma = $conn->prepare($sqlForma);
            $stmtForma->bind_param("ss", $_COOKIE['username'], $nomeTeam);
            $stmtForma->execute();

            // Commit della transazione solo se tutte le operazioni hanno avuto successo
            $conn->commit();

            $stmtSquadra->close();
            $stmtPokemon->close();
            $stmtForma->close();
            $conn->close();

            return true;
        }

        // Se la query per l'inserimento del team non ha avuto successo
        // Rollback della transazione e chiusura delle connessioni
        $conn->rollback();
        $stmtSquadra->close();
        $conn->close();

        return false;
    }


}
