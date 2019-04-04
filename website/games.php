<?php
/**
 * Created by PhpStorm.
 * User: wsbos
 * Date: 4/3/2019
 * Time: 07:56 PM
 */

require "header.php";


?>

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
<div class="sub_header">
    <h1>Klik op een spel om te beginnen!</h1>
</div>
<div class="row">
    <div class="column">
        <a href="blackjack.php">
            <img src="web-img/blackjack.png" alt="logo" width="500">
        </a>
    </div>
    <div class="column">
        <a href="breakout.php">
            <img src="web-img/breakout.png" alt="logo" width="500">
        </a>
    </div>
</div>

<?php
require "footer.php";
?>
</body>
</html>
