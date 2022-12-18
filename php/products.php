<!DOCTYPE html>
<html>

    <head>
        <title>Receipt</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1" />
        <!--CSS File-->
        <link rel="stylesheet" href="../css/style.css" />
        <!--End CSS-->

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
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $credit = $_POST['credit'];
            $sec_code = $_POST['sec_code'];
            $address = $_POST['address'];
            $zip = $_POST['zip'];

            echo $fname;

            $line = $fname . ":" . $lname . ":" . $email . ":" . $phone . ":" . $credit . ":" . $sec_code . ":" . $address . ":" . $zip . ":" . "\n";
            $file = fopen('../data/clients.txt', "a");
            fwrite($file, $line);
            fclose($file);  
        ?>
    </body>
</html>