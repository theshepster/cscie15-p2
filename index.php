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
        require_once("header.html");
        ?>

        <div class="row"><br></div>

        <?php
        require_once("defaults.php");
        require_once("form.php");    
        require_once("validate_form.php");
        require_once("generate_password.php");
        require_once("display_password.php");
        ?>

        <!-- These scripts are included with Foundation 6. -->
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>


