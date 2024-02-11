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
        $email = $utente['email'];
        $sql = "INSERT INTO utente(Id, Email, password) VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        //il primo parametro specifica il tipo dei valori da passare
        $stmt->bind_param("sss", $username, $email, $password);

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
        if($result->field_count > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row['Id'] == $username && $row['password'] == $password){
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
            if($result > 0){
                while($row = $result->fetch_assoc())
                {
                    $user = row['IdUtente'];
                    $teamName = row['NomeSquadra'];
                    $firstPokemon = row[''];
                    $badge = new UserBadge();
                }

            }
            else
                return $badges;
    }



}