<?php

namespace classes;

use mysqli;

class DB
{

    private static function connection()
    {
        $servername = "dbdexusers";
        $username = "username";
        $password = "password";

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;

    }

    public static function createNewUser()
    {

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