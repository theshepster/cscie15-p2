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

        <?php include_once("header.html"); ?>


                <form>
                    <div class="row text-center">
                        <div class="small-2 small-centered columns">
                            <label>Separator
                                <select>
                                    <option value="space">Space</option>
                                    <option value="hyphen">Hyphen</option>
                                    <option value="period">Period</option>
                                    <option value="underscore">Underscore</option>
                                    <option value="comma">Comma</option>
                                    <option value="camel">None (camelCase)</option>
                                </select>
                            </label>
                        </div>
                    </div>  
                    <div class="row text-center">
                        <label>Choose number of words
                            <div class="small-1 small-centered columns">
                                <input type="number" id="num-words" max="9" min="4">
                            </div>
                        </label>
                    </div>
                    <div class="row text-center">
                        <label>Choose number of symbols
                            <div class="small-1 small-centered columns">
                                <input type="number" id="num-symbols" max="9" min="1">
                            </div>
                        </label>
                    </div>
                    <div class="row text-center">
                        <label>Choose number of numbers
                            <div class="small-1 small-centered columns">
                                <input type="number" id="num-numbers" max="9" min="1">
                            </div>
                        </label>
                    </div>
                </form>
            
        

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>


