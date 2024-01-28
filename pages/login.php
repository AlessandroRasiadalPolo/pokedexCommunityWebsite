<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/loginPageStyle.css">
</head>
<body>
<section id="body-login">
    <h1 class="text">Benvenuto Allenatore sul pokedex nazionale</h1>
    <h2 class="text">Effettua il login inserendo email e password</h2>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="login-form">
        <label for="" class="label-form">Nome Utente</label>
        <input type="text" name="username" id="input-Name" class="formInput" required><br>
        <label for="" class="label-form">Password</label>
        <input type="password" name="password" id="input-Password" class="formInput" required><br>
        <input type="submit" value="LOGIN" name="login" class="formInput">
    </form>
    <p id="register-link">Non hai un account? <a href="register.php">Registrati</a></p>
</section>

<video id="background-video" autoplay muted loop>
    <source src="../videos/loginBackground.mp4" type="video/mp4">
</video>



    <?php

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $users = json_decode(file_get_contents("../json/utenti.json"), true);

        foreach($users as $user){
            if($user['username'] == $username && $user['password'] == $password)
            {
                setcookie("username", $username, time() + 3600, "/");
                header("Location: ../index.php");
                exit();
            }
        }
    }

    ?>
</body>
</html>