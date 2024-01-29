<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<header>
    <div class = "navId">
        <nav>
            <?php

            if(isset($_COOKIE['username'])){
                echo '<a href="index.php"><button>Home</button></a>';
                $username = $_COOKIE['username'];
                echo '<a href="./pages/profile.php"><button>'.$username.'</button></a>';
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