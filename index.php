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
        

        <h4 class="text-center">put-generated-passsword-here</h4>
           

        <div class="row">
            <div class="small-6 small-centered medium-6 large-4 large-centered columns">
                <form>
                    <div class="row column log-in-form">

                        <div class="row">
                            <label>Number of words</label>
                            <div class="slider small-8 columns" data-slider data-initial-start="5" data-start="1" data-end="9">
                                    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="num-words"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                            </div>
                            <div class="small-4 columns">
                                <input type="number" id="num-words" placeholder="Number of words">
                            </div>
                        </div>

                        <div class="row">
                            <label>Number of symbols at end</label>
                            <div class="slider small-8 columns" data-slider data-initial-start="5" data-start="1" data-end="9">
                                    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="num-symbols"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                            </div>
                            <div class="small-4 columns">
                                <input type="number" id="num-symbols" placeholder="Number of words">
                            </div>
                        </div>

                        <div class="row">
                            <label>Number of numbers at end</label>
                            <div class="slider small-8 columns" data-slider data-initial-start="5" data-start="1" data-end="9">
                                    <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="num-numbers"></span>
                                    <span class="slider-fill" data-slider-fill></span>
                            </div>
                            <div class="small-4 columns">
                                <input type="number" id="num-numbers" placeholder="Number of words">
                            </div>
                        </div>

                        <div class="row">
                            <label>Separator</label>
                            <select>
                                <option value="space">Space</option>
                                <option value="comma">Comma</option>
                                <option value="underscore">Underscore</option>
                                <option value="period">Period</option>
                                <option value="camel">camelCase</option>
                            </select>
                        </div>
                        
                        <p><button type="submit" class="button expanded" value="Generate Password">Generate Passwords</button></p>
                        <p class="text-center"><a href="#">Inspiration?</a></p>   
                    </div>
                </form>
            </div>
        </div>


        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>


