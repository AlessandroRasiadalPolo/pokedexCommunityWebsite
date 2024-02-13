<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/teamMaker/teamMaker.css">
    <link rel="stylesheet" href="../styles/header.css">
    <!-- Link per Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/teamMaker/selectedTeamStyle.css">
    <!-- Link per Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="../scripts/DataSaverHandler.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src = "../scripts/ajax-functions.js"></script>
    <title>TeamMaker</title>
</head>
<body>
<header>
    <nav>
        <h1>La sala d'onore della Community</h1>

        <?php

        if (isset($_COOKIE['username'])) {

            echo '<a href="../index.php" class = "headerLink"><button class = "headerButton">Home</button></a>';
            $username = $_COOKIE['username'];
            echo '<a href="./profile.php" class = "headerLink"><button class = "headerButton">' . $username . '</button></a>';
            echo '<a href="" class = "headerLink"><button class = "headerButton" onclick="deleteCookie(\'username\')" style = "border: none; float: right; margin-right: 50px">Exit</button></a>';
        } else {
            header("Location: ./login.php");
        }

        ?>

    </nav>
</header>

<section id="bodyPage">

<div id = "pokemonList">

</div>
<div class = "divChart">
    <div class = "imgPokemonDiv">
        
        <div class = "imgPokemon">
            <img src="https://www.smogon.com/dex/media/sprites/xy/bulbasaur.gif" class = "pokemonImg" alt="">
        </div>
        <div class = "pokemonName" style="">
            <input type="text" name="" class ="pokemonName" onkeyup="showPokemon(this.value)">
        </div>
    </div>
    <div class = "abilities-items">
        <div class = "abilityDiv">
            <label for="">Item</label>
            <input type="text" name="" id="">

        </div>
        <div class = "itemDiv">
            <label for="">Ability</label>
            <input type="text" name="" id="">
        </div>
    </div>
    <div class = "moveSet">
        <div class = "move">
            <input type="text" name="" id="">
        </div>
        <div class = "move">
            <input type="text" name="" id="">
        </div>
        <div class="move">
            <input type="text" name="" id="">
        </div>
        <div class="move">
            <input type="text" name="" id="">
        </div>
    </div>
    <div class = "divStatistics">
        <div class = "statsContainer">
            <label class = "statsName" for="">HP</label>
            <div class = "stats"></div>
        </div>
        <div class = "statsContainer">
            <label class = "statsName" for="">ATK</label>
            <div class = "stats"></div>
        </div>
        <div class = "statsContainer">
            <label class = "statsName" for="">SPE</label>
            <div class = "stats"></div>
        </div>
        <div class = "statsContainer">
            <label class = "statsName" for="">SPD</label>
            <div class = "stats"></div>
        </div>
        <div class = "statsContainer">
            <label class = "statsName" for="">DEF</label>
            <div class = "stats"></div>
        </div>
        <div class = "statsContainer">
            <label class = "statsName" for="">SATK</label>
            <div class = "stats"></div>
        </div>
    </div>
</div>

    <div class = "divChart">
        <div class = "imgPokemonDiv">

            <div class = "imgPokemon">
                <img src="https://www.smogon.com/dex/media/sprites/xy/charizard.gif" class = "pokemonImg" alt="">
            </div>
            <div class = "pokemonName" style="">
                <input type="text" name="" class ="pokemonName" id = "pokemonNameTxt">
            </div>
        </div>
        <div class = "abilities-items">
            <div class = "abilityDiv">
                <label for="">Item</label>
                <input type="text" name="" id="itemNameTxt">

            </div>
            <div class = "itemDiv">
                <label for="">Ability</label>
                <input type="text" name="" id="itemNameTxt">
            </div>
        </div>
        <div class = "moveSet">
            <div class = "move">
                <input type="text" name="" id="move1Txt">
            </div>
            <div class = "move">
                <input type="text" name="" id="move2Txt">
            </div>
            <div class="move">
                <input type="text" name="" id="move3Txt">
            </div>
            <div class="move">
                <input type="text" name="" id="move4Txt">
            </div>
        </div>
        <div class = "divStatistics">
            <div class = "statsContainer">
                <label class = "statsName" for="">HP</label>
                <div class = "stats"></div>
            </div>
            <div class = "statsContainer">
                <label class = "statsName" for="">ATK</label>
                <div class = "stats"></div>
            </div>
            <div class = "statsContainer">
                <label class = "statsName" for="">SPE</label>
                <div class = "stats"></div>
            </div>
            <div class = "statsContainer">
                <label class = "statsName" for="">SPD</label>
                <div class = "stats"></div>
            </div>
            <div class = "statsContainer">
                <label class = "statsName" for="">DEF</label>
                <div class = "stats"></div>
            </div>
            <div class = "statsContainer">
                <label class = "statsName" for="">SATK</label>
                <div class = "stats"></div>
            </div>
        </div>
    </div>

</section>

</body>
</html>