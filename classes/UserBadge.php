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




}

?>
