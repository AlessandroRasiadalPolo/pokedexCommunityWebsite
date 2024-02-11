<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/homePage.css">
    <link rel="stylesheet" href="./styles/header.css">
    <script src = "./scripts/DataSaverHandler.js"></script>

</head>
<body>


<header>
        <nav>
            <h1>La sala d'onore della Community</h1>

            <?php

            if(isset($_COOKIE['username'])){

                echo '<a href="index.php" class = "headerLink"><button class = "headerButton">Home</button></a>';
                $username = $_COOKIE['username'];
                echo '<a href="./pages/profile.php" class = "headerLink"><button class = "headerButton">'.$username.'</button></a>';
                echo '<a href = "./pages/teamMaker.php"><button class = "headerButton" >TeamMaker</button></a>';
                echo '<a href="" class = "headerLink"><button class = "headerButton" onclick="deleteCookie(\'username\')" style = "border: none; float: right; margin-right: 50px">Exit</button></a>';
            }
            else{
                echo '<a href="index.php" class = "headerLink"><button class = "headerButton">Home</button></a>';
                echo '<a href="./pages/login.php" class = "headerLink"><button class = "headerButton">Login</button></a>';
            }

            ?>

        </nav>

</header>

<section id = "bodyPage">

    <div class = "userBadge">
        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png"  id = "imgAnimation1-1" class = "pokemonAnimation" alt="">
        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/911.png"  id = "imgAnimation2-1" class = "pokemonAnimation" alt ="">
        <h2>Trainer's Card</h2>
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


    </div>

    <?php

    //Faccio una chiamata al database per ottenere tutti i badge creati dai vari utenti




    ?>

</section>

<footer>

</footer>

</body>
</html>