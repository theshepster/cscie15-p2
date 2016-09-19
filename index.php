<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shep Moore-Berg - DWA15 xkcd Password Generator</title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>

        <?php
        include_once("header.html");
        ?>

        <div class="row"><br></div>

        <?php
        include_once("form.php");
        include_once("validate_form.php");
        include_once("generate_password.php");
        include_once("display_password.php")
        ?>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>


