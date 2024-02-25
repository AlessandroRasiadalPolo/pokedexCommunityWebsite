<?php

namespace classes;

class UserBadge{

    private $userPhoto;
    private $username;
    private $teamName;
    private $pokemon1;
    private $pokemon2;
    private  $pokemon3;
    private $pokemon4;

    public function __construct($userPhoto, $username, $teamName, $pokemon1, $pokemon2, $pokemon3, $pokemon4)
    {
        $this->userPhoto = $userPhoto;
        $this->username = $username;
        $this->teamName = $teamName;
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
        $this->pokemon3 = $pokemon3;
        $this->pokemon4 = $pokemon4;
    }

    /**
     * @return mixed
     */
    public function getUserPhoto()
    {
        return $this->userPhoto;
    }

    /**
     * @param mixed $userPhoto
     */
    public function setUserPhoto($userPhoto)
    {
        $this->userPhoto = $userPhoto;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param mixed $teamName
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }

    /**
     * @return mixed
     */
    public function getPokemon1()
    {
        return $this->pokemon1;
    }

    /**
     * @param mixed $pokemon1
     */
    public function setPokemon1($pokemon1)
    {
        $this->pokemon1 = $pokemon1;
    }

    /**
     * @return mixed
     */
    public function getPokemon2()
    {
        return $this->pokemon2;
    }

    /**
     * @param mixed $pokemon2
     */
    public function setPokemon2($pokemon2)
    {
        $this->pokemon2 = $pokemon2;
    }

    /**
     * @return mixed
     */
    public function getPokemon3()
    {
        return $this->pokemon3;
    }

    /**
     * @param mixed $pokemon3
     */
    public function setPokemon3($pokemon3)
    {
        $this->pokemon3 = $pokemon3;
    }

    /**
     * @return mixed
     */
    public function getPokemon4()
    {
        return $this->pokemon4;
    }

    /**
     * @param mixed $pokemon4
     */
    public function setPokemon4($pokemon4)
    {
        $this->pokemon4 = $pokemon4;
    }

    public function generateBadge($pokemons)
    {
        return '<div class = "userBadge">
        <img src=""  id = "imgAnimation1-1" class = "pokemonAnimation" alt="">
        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/911.png"  id = "imgAnimation2-1" class = "pokemonAnimation" alt ="">
        <h2>Trainer\'s Card</h2>
        <img src="images/icon.png" alt="" class = "imgBadge">
        <h3>Team Name</h3>
        <div class = "teamDiv">
            <div class = "pokemonDescription">
                <img src="https://www.smogon.com/dex/media/sprites/xy/scizor.gif" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://www.smogon.com/dex/media/sprites/xy/charizard.gif" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://www.smogon.com/dex/media/sprites/xy/bulbasaur.gif"" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://www.smogon.com/dex/media/sprites/xy/kyurem.gif" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://www.smogon.com/dex/media/sprites/xy/kyurem-white.gif" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://www.smogon.com/dex/media/sprites/xy/kyurem-black.gif" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>

        </div>


    </div>';


    }

    public static function generateTeam($team)
    {
        //Al posto di una grande stringa mi conviene concatenare i vari passaggi e dopo ritornarlo

        $html = '<div class="teamDiv">
            <h3 class="teamTitle">'. $team["NomeSquadra"] .'</h3>
            <div class="members">';

        foreach ($team as $pokemonName) {
            // Aggiungi il tag HTML per l'immagine del Pokémon
            $html .= '<div class="pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class="pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/' . $pokemonName . '.png" class="pokemon">
            </div>';
        }

        $html .= '<button class="teamButton">Modifica</button>
            </div>
        </div>';

        return $html;
    }




}

?>
