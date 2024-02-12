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
    <script src="../scripts/DataSaverHandler.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

<div id = "pokemonList" style="border: 1px white solid; width: 100%; height: 50px; margin-bottom: 30px;">

</div>
<div class = "divChart" style="border: white 1px solid; width: 900px; height: 300px; display: flex">
    <div class = "imgPokemonDiv" style="height: 100%; width: 20%; border: white 1px solid">
        <div class = "imgPokemon">

        </div>
        <div class = "pokemonName">

        </div>
    </div>
    <div class = "abilities-items" style="height: 100%; width: 25%; border: white 1px solid">
        <div class = "abilityDiv">

        </div>
        <div class = "itemDiv">

        </div>
    </div>
    <div class = "moveSet" style="height: 100%; width: 25%; border: white 1px solid">
        <div class = "move1">

        </div>
        <div class = "move2">

        </div>
        <div class="move3">

        </div>
        <div class="move4">

        </div>
    </div stys>
    <div class = "divStatistics" style="height: 100%; width: 30%; border: white 1px solid">

    </div>
</div>

</section>

</body>
</html>