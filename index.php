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
                    <div class="row">
                        <div class="small-2 columns">
                            <label>Separator
                                <select>
                                    <option value="space">Space</option>
                                    <option value="hyphen">Hyphen</option>
                                    <option value="period">Period</option>
                                    <option value="underscore">Underscore</option>
                                    <option value="comma">Comma</option>
                                    <option value="camel">None (CamelCase)</option>
                                </select>
                            </label>
                        </div>
                    </div>  
                    <div class="row">
                        <fieldset class="fieldset">
                            <legend>Choose number of words</legend>
                            <div class="small-4 columns">
                                <div class="slider" data-slider data-initial-start="4" data-start="4" data-end="9">
                                    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="words"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="small-1 columns end">
                                <input type="number" id="words">
                            </div>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="fieldset">
                            <legend>Choose number of symbols</legend>
                            <div class="small-4 columns">
                                <div class="slider" data-slider data-initial-start="1" data-start="1" data-end="9">
                                    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="symbols"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="small-1 columns end">
                                <input type="number" id="symbols">
                            </div>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="fieldset">
                            <legend>Choose number of numbers</legend>
                            <div class="small-4 columns">
                                <div class="slider" data-slider data-initial-start="1" data-start="1" data-end="9">
                                    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="numbers"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                                </div>
                            </div>
                            <div class="small-1 columns end">
                                <input type="number" id="numbers">
                            </div>
                        </fieldset>
                    </div>
                </form>
            
        

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>


