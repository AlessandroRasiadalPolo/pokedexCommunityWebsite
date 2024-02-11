<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/teamMaker.css">
    <link rel="stylesheet" href="../styles/header.css">
    <!-- Link per Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link per Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src = "../scripts/DataSaverHandler.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <h1>La sala d'onore della Community</h1>

        <?php

        if(isset($_COOKIE['username'])){

            echo '<a href="../index.php" class = "headerLink"><button class = "headerButton">Home</button></a>';
            $username = $_COOKIE['username'];
            echo '<a href="./profile.php" class = "headerLink"><button class = "headerButton">'.$username.'</button></a>';
            echo '<a href="" class = "headerLink"><button class = "headerButton" onclick="deleteCookie(\'username\')" style = "border: none; float: right; margin-right: 50px">Exit</button></a>';
        }
        else{
            header("Location: ./login.php");
        }

        ?>

    </nav>
</header>

<section id = "bodyPage">
    <h2>I tuoi team</h2>
    <div class = "teamDiv">
        <h3 class = "teamTitle">Titolo del team</h3>
        <div class = "members">
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "pokemon">
            </div>

            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/charizard.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/brute-bonnet.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/zekrom.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/necrozma.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/pokeballSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/ursaluna.png" alt="" class = "pokemon">
            </div>
        </div>

    </div>
    <div class = "teamDiv">
        <h3 class = "teamTitle">Titolo del team</h3>
        <div class = "members">
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "pokemon">
            </div>

            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/charizard.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/brute-bonnet.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/zekrom.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/escaBallSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/necrozma.png" alt="" class = "pokemon">
            </div>
            <div class = "pokemonContainer">
                <img src="../images/pokeballSprite.png" alt="" class = "pokeball">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/ursaluna.png" alt="" class = "pokemon">
            </div>
        </div>
    </div>
    <button><i class = "fas fa-plus-circle"></i>New Team</button>

</section>

</body>
</html>