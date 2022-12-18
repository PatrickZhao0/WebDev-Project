<!DOCTYPE html>
<html>

    <head>
        <title>Home</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1" />

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Russo One" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet" />
        <!--End Fonts-->

        <!--CSS File-->
        <link rel="stylesheet" href="../css/style.css" />
        <!--End CSS-->

        <style>
            footer {
            position: fixed;
            left: 0;
            bottom: 10px;
            width: 100%;
            text-align: center;
            }
        </style>

    </head>

    <body>
        <h1>
            Thank You For Your Registration!
        </h1>
        <h1 style="font-size: 10vw; margin-top: 5vh; margin-bottom: 5vh;">✅</h1>

        <a href="../index.html" style="display: flex; justify-content: center;"><button class="button">Back To Login In</button></a>
        
        <?php
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $line = $username . ":" . $password . ";" . $email . "\n";
            $file = fopen('../data/user.txt', "a");
            fwrite($file, $line);
            fclose($file);
        ?>

        <footer style="text-align: center; margin-top: 10px;">Copyright &copy 2022 Emoji Mayhem. All right reserved.</footer>

    </body>
    