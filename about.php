<?php
/**
 * Created by PhpStorm.
 * User: wsbos
 * Date: 4/4/2019
 * Time: 10:18 AM
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
<div class="form">
    <form action="mailto:ws.bos@outlook.com" method="post">
        <p>
            Uw naam (verplicht): <br />
            <input type="text" name="your-name" class="inputfield">
        </p>
        <p>
            Uw email-adres (verplicht): <br />
            <input type="email" name="your-email" class="inputfield">
        </p>
        <p>
            Vul een datum in(verplicht): <br />
            <input type="date" name="your-date" class="inputfield">
        </p>
        <p>
            Onderwerp: <br />
            <input type="text" name="subject" class="inputfield">
        </p>
        <p>
            Bericht: <br />
            <textarea name="message" rows="10" class="inputfield"></textarea>
        </p>
        <button type="submit" class="form-button" style="border:none;background: transparent;">
            <a href="about.php">
                Verzenden
            </a>
        </button>
    </form>
</div>
<?php
require "footer.php";
?>
</body>
</html>
