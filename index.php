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
                echo '<a href="index.php"><button>Home</button></a>';
                $username = $_COOKIE['username'];
                echo '<a href=""><button>'.$username.'</button></a>';
                echo '<a href = ""><button>TeamMaker</button></a>';
                echo '<a href=""><button onclick="deleteCookie(\'username\')">Exit</button></a>';
            }
            else{
                echo '<a href="index.php"><button>Home</button></a>';
                echo '<a href="./pages/login.php"><button>Login</button></a>';
                echo '<a href=""><button>Pokedex</button></a>';
            }

            ?>

        </nav>
    </div>

</header>

<section>

</section>

<footer>

</footer>

</body>
</html>