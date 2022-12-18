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
            $input = strtolower($input);
            $file = fopen("../data/emoji.txt", "r") or die("errors openning or reading from file");
            $flag = false;
        
                switch ($input) {
                  case 'unicorn':
                    echo "<h1>🦄 Unicorns are $10</h1>";
                    break;
                  case 'ice man':
                    echo "<h1>🥶 Ice Man are $7</h1>";
                    break;
                  case 'angel':
                    echo "<h1>😇 Angels are $5</h1>";
                    break;
                    case 'hammer':
                      echo "<h1>🔨 Hammers are $5</h1>";
                      break;
                    case 'cherries':
                      echo "<h1>🍒 Cherries are $3</h1>";
                      break;
                      case 'pizza':
                        echo "<h1> 🍕 Pizzas are $2</h1>";
                        break;
                        case 'cd':
                          echo "<h1>📀 CDs are $8</h1>";
                          break;
                          case 'speaker':
                            echo "<h1>🔊 Speakers are $9</h1>";
                            break;
                  default:
                    echo "<h1>🥲 Sorry, Item Not Exist! Try Again</h1>";
            }

            fclose($file);
            
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