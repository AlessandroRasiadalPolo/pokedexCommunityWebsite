<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/teamMaker.css">
    <script src = "../scripts/DataSaverHandler.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <div class = "navId">
        <nav>
            <?php

            if(isset($_COOKIE['username'])){
                echo '<a href="../index.php"><button class = "headerButton">Home</button></a>';
                $username = $_COOKIE['username'];
                echo '<a href="./pages/profile.php"><button class = "headerButton">'.$username.'</button></a>';
                echo '<a href=""><button class = "headerButton">Pokedex</button></a>';
                echo '<a href=""><button class = "headerButton" onclick="deleteCookie(\'username\')">Exit</button></a>';

            }
            else{
                header("Location: ../index.php");
            }

            ?>

        </nav>
    </div>

</header>

</body>
</html>