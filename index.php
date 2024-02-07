<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/homePage.css">
    <script src = "./scripts/DataSaverHandler.js"></script>

</head>
<body>


<header>
        <nav>
            <?php

            if(isset($_COOKIE['username'])){
                echo '<a href="index.php"><button class = "headerButton">Home</button></a>';
                $username = $_COOKIE['username'];
                echo '<a href="./pages/profile.php"><button class = "headerButton">'.$username.'</button></a>';
                echo '<a href = "./pages/teamMaker.php"><button class = "headerButton">TeamMaker</button></a>';
                echo '<a href=""><button class = "headerButton" onclick="deleteCookie(\'username\')">Exit</button></a>';
            }
            else{
                echo '<a href="index.php"><button class = "headerButton">Home</button></a>';
                echo '<a href="./pages/login.php"><button class = "headerButton">Login</button></a>';
                echo '<a href=""><button class = "headerButton">Pokedex</button></a>';
            }

            ?>

        </nav>

</header>

<section id = "bodyPage">

    <div class = "userBadge">
        <img src="./images/steelex.png"  id = "imgAnimation1-1" class = "pokemonAnimation" alt="">
        <img src="./images/typhlosion.png"  id = "imgAnimation2-1" class = "pokemonAnimation" alt ="">
        <h2>Trainer's Card</h2>
        <img src="images/icon.png" alt="" class = "imgBadge">
        <h3>Team Name</h3>
        <div class = "teamDiv">
        <div class = "pokemonDescription">
            <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
            <div>
                <p>Mossa 1</p>
                <p>Mossa2</p>
                <p>Mossa 3</p>
                <p>Mossa4</p>
            </div>
        </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/annihilape.png"" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>

        </div>


    </div>

    <div class = "userBadge">
        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/155.png"  id = "imgAnimation1-1" class = "pokemonAnimation" alt="">
        <img src="./images/typhlosion.png"  id = "imgAnimation2-1" class = "pokemonAnimation" alt ="">
        <h2>Trainer's Card</h2>
        <img src="images/icon.png" alt="" class = "imgBadge">
        <h3>Team Name</h3>
        <div class = "teamDiv">
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/annihilape.png"" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>
            <div class = "pokemonDescription">
                <img src="https://img.pokemondb.net/sprites/scarlet-violet/normal/bulbasaur.png" alt="" class = "imgBadge">
                <div>
                    <p>Mossa 1</p>
                    <p>Mossa2</p>
                    <p>Mossa 3</p>
                    <p>Mossa4</p>
                </div>
            </div>

        </div>


    </div>



</section>

<footer>

</footer>

</body>
</html>