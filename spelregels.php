<?php
/**
 * Created by PhpStorm.
 * User: wsbos
 * Date: 4/3/2019
 * Time: 10:07 PM
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
    <h1>Uitgebreide spelregels voor</h1>
</div>
    <div class="row">
        <div class="column">
            <button id="blackjackBtn">
                <img src="web-img/blackjack.png" alt="logo" width="500">
            </button>
        </div>




        <!-- The Modal -->
        <div id="blackjackModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 class="modal-header">Blackjack</h1>
                <p>Om blackjack spelregels te snappen moeten we eerst weten wat het doel is van het spel. Het blackjack doel is heel simpel; zo dicht mogelijk, of op 21 geraken. Het spel wordt daarom ook wel 21-en genoemd. Als je over de 21 heen gaat verlies je, en je verliest ook als de dealer hoger eindigt dan jij. De blackjack strategie om blackjack goed te kunnen spelen en winst te kunnen maken is een stuk moeilijker. Blackjack wordt altijd al veel in casino’s gespeeld, en met de opkomst van de online casino’s, is de populariteit ervan alleen maar gestegen. Bij ons kun je alle informatie vinden die je nodig hebt om winst te maken met blackjack spelen, of het nou online, of in een echt casino is. Allereerst leggen we je de regels van het spel volledig uit, daarna kun je de beste strategie bekijken en kun je bij Top Casino ook blackjack gratis spelen om deze strategie direct uit te proberen. Veel succes met blackjack!</p>
            </div>

        </div>



        <div class="breakout">
            <button id="breakoutBtn">
                <img src="web-img/breakout.png" alt="logo" width="500">
            </button>
        </div>
    </div>

<div id="breakoutModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1 class="modal-header">Spelregels Blackjack</h1>
        <p>Some text in the Modal..</p>
    </div>

</div>


<script>
    // Get the modal
    var bjmodal = document.getElementById('blackjackModal');

    var brmodal = document.getElementById('breakoutModal');

    // Get the button that opens the modal
    var bjbtn = document.getElementById("blackjackBtn");

    var brbtn = document.getElementById("breakoutBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
        bjbtn.onclick = function() {
            bjmodal.style.display = "block";
        }

        brbtn.onclick = function() {
            brmodal.style.display = "block";
        }


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            bjmodal.style.display = "none";
        }

        span.onclick = function() {
            brmodal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === bjmodal || event.target === brmodal) {
                bjmodal.style.display = "none";
                brmodal.style.display = "none";
            }
    }

</script>
<?php
require "footer.php";
?>
</body>
</html>

