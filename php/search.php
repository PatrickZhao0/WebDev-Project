<!DOCTYPE html>
<html>

    <head>
        <title>Search Emoji</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1" />

        <!--CSS File-->
        <link rel="stylesheet" href="../css/style.css" />
        <!--End CSS-->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
    </head>
    
    <body>
        <nav class="navbar">
            <ul>
                <li><a href="../start_game.html">Play 🕹️ </a></li>
              <li><a href="../search.html">Search Emoji 🔎 </a></li>
              <li><a href="../shopping_cart.html">Shopping Cart 🛒 </a></li>
                 <li><a href="../contact.html">Contact Us 📞</a></li>
                 <li><a href="../index.html">Log Out 🚪🚶</a></li>
            </ul>
          </nav>

          <?php
            $input = $_GET['input'];
            $file = fopen("../data/emoji.txt", "r") or die("errors openning or reading from file");
            $flag = false;
            
            while(!(feof($file))){
                $fline = fgets($file);
                $fline = rtrim($fline);
                
                $credential = explode(":", $fline);
                if($input == $credential[0]){
                    fclose($file);
                    echo "";
                    break;
                }
            }

            fclose($file);
            echo "<img>🥲</img>";
            echo "<p>Sorry, Item Not Exist! Try Again</p>"

           ?>
  

          <div style="display: flex; justify-content: center;">
            <a href="../shopping_cart.html" style="text-align: center;"><button  id="loginButton" class="button">Go to Shop</button></a>
            <a href="../search.html" style="text-align: center;" ><button id="loginButton" class="button">Back</button></a>  
          </div>
         
        <footer>
            Copyright &copy 2022 Emoji Mayhem. All right reserved.
        </footer>
    </body>

</html>