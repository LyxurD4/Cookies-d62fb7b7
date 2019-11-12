<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy a neef</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form action="" method="post" target="_blank">
            Kies een product: <input type="text" name="product">
            <br>
            <input type="submit" value="Submit"><br>
        </form>
        <?php
            $cookie_name = "user";
            setcookie($cookie_name); 
            $product = "Kies een product pls";
            if (!empty($_POST["product"])) {
                $product = $_POST["product"];
            }
            $_COOKIE["product"] = $product;
            
            //validatie
            if ($_COOKIE["product"] > 3) {
                echo "Geef een geldig getal op";
                exit;
            }
            if ($_COOKIE["product"] < 1) {
                echo "Geef een geldig getal op";
                exit;
            }
            echo "Gekozen item: ". $_COOKIE["product"];
        ?>
    </body>
</html>