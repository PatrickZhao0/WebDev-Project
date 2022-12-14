<!DOCTYPE html>
<html>

    <head>
        <title>Home</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1" />
        <!--CSS File-->
        <link rel="stylesheet" href="../css/style.css" />
        <!--End CSS-->

    </head>

    <body>
       <img src="img/loading.gif" style="margin: auto; display: block; transform: translate(0%, 100%);">
       <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $line = $username . ":" . $password;
        $file = fopen("../data/user.txt", "r") or die("errors openning or reading from file");
        $flag = false;
        
        
        while(!(feof($file))){
            $fline = fgets($file);
            $fline = rtrim($fline);
            $credential = explode(";", $fline);
            if($line == $credential[0]){
                fclose($file);
                echo "<script>location.replace('../start_game.html');</script>";
                break;
            }
        }

        fclose($file);
        echo "<script>
        alert('Your Username or Password is invalid. Try Again!');
        setTimeout(function(){
            location.replace('../index.html');
        }, 2000);
        </script>";
        
        
        
    ?>
    </body>
</html>
    