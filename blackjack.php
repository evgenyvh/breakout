<?php
/**
 * Created by PhpStorm.
 * User: wsbos
 * Date: 4/4/2019
 * Time: 09:50 AM
 */
require "header.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlackJack Game</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div>
    <div>
        <div id="message">Druk op de start knop
            <div id="start">
                <button id="btnstart" type="button" onclick="Start()" class="btn">Start Game</button>
            </div>
        </div>

        <div class="total">Totaal €<span id="dollars">100</span><br>Inzet €<input type="number" id="mybet" value="5" min="1" max="100"><button id="maxbet" type="button" onclick="maxbet()" class="btn">All in</button>
        </div>
        <div id="output">
            Dealer Hand : <span id="dValue"></span>
            <div id="dealerHolder"></div>
            Player Hand : <span id="pValue"></span>
            <div id="playerHolder"></div>
            <div id="myactions">
                <button id="btnhold" type="button" onclick="cardAction('hold')" class="btn">Hold</button>
                <button id="btnhit" type="button" onclick="cardAction('hit')" class="btn">Hit</button>
                <button id="btndouble" type="button" onclick="cardAction('double')" class="btn">Double</button>
            </div>
            <div>
                <button id="btndeal" type="button" onclick="dealNew()" class="btn">Deal</button>
            </div>
        </div>
        <div>
        </div>
        <script src="script.js"></script>

        <?php
        require "footer.php";
        ?>
</body>
</html>
