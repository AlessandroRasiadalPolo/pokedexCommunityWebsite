<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/homePage.css">
    <script>
        function deleteCookie(cookieName1) {
            //Elimino i cookie ponendo la data di scadenza a ora
            var pastDate = new Date(0);

            document.cookie = cookieName1 + "=; expires=" + pastDate.toUTCString() + "; path=/";
        }
    </script>
</head>
<body>

<header>
    <div class = "navId">
        <nav>
            <?php

            if(isset($_COOKIE['username'])){
                echo '<a href="index.php"><button class = "headerButton">Home</button></a>';
                $username = $_COOKIE['username'];
                echo '<a href="./pages/profile.php"><button class = "headerButton">'.$username.'</button></a>';
                echo '<a href = ""><button class = "headerButton">TeamMaker</button></a>';
                echo '<a href=""><button class = "headerButton" onclick="deleteCookie(\'username\')">Exit</button></a>';
            }
            else{
                echo '<a href="index.php"><button class = "headerButton">Home</button></a>';
                echo '<a href="./pages/login.php"><button class = "headerButton">Login</button></a>';
                echo '<a href=""><button class = "headerButton">Pokedex</button></a>';
            }

            ?>

        </nav>
    </div>

</header>

<section>

    <div class = "userBadge">
        <img src="" alt="" class = "imgBadge">
        <p>Nome del Team</p>
        <img src="" alt="" class = "imgBadge">
        <img src="" alt="" class = "imgBadge">
        <img src="" alt="" class = "imgBadge">
        <img src="" alt="" class = "imgBadge">
        <img src="" alt="" class = "imgBadge">
        <img src="" alt="" class = "imgBadge">


    </div>

</section>

<footer>

</footer>

</body>
</html>