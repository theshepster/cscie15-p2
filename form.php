<div class="row">
    <div class="small-8 small-centered medium-6 large-4 large-centered columns">
        <form method='POST' action='/'>
            <div class="row column">

                <div class="row">
                    <label>Number of words</label>
                    <div class="slider small-8 columns" data-slider data-initial-start="<?php echo isset($_POST['num-words']) ? $_POST['num-words'] : 5; ?>" data-start="1" data-end="9">
                            <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="num-words" aria-valuenow="<?php echo isset($_POST['num-words']) ? $_POST['num-words'] : 5; ?>" aria-valuemin="1" aria-valuemax="9"></span>
                            <span class="slider-fill" data-slider-fill></span>
                    </div>
                    <div class="small-4 columns">
                        <input type="number" id="num-words" name="num-words" placeholder="Number of words">
                    </div>
                </div>

                <div class="row">
                    <label>Number of symbols at end</label>
                    <div class="slider small-8 columns" data-slider data-initial-start="<?php echo isset($_POST['num-symbols']) ? $_POST['num-symbols'] : 5; ?>" data-start="1" data-end="9">
                            <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="num-symbols" aria-valuenow="<?php echo isset($_POST['num-symbols']) ? $_POST['num-symbols'] : 5; ?>" aria-valuemin="0" aria-valuemax="9"></span>
                            <span class="slider-fill" data-slider-fill></span>
                    </div>
                    <div class="small-4 columns">
                        <input type="number" id="num-symbols" name="num-symbols" placeholder="Number of words">
                    </div>
                </div>

                <div class="row">
                    <label>Number of numbers at end</label>
                    <div class="slider small-8 columns" data-slider data-initial-start="<?php echo isset($_POST['num-numbers']) ? $_POST['num-numbers'] : 5; ?>" data-start="1" data-end="9">
                            <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="num-numbers" aria-valuenow="<?php echo isset($_POST['num-numbers']) ? $_POST['num-numbers'] : 5; ?>" aria-valuemin="0" aria-valuemax="9"></span>
                            <span class="slider-fill" data-slider-fill></span>
                    </div>
                    <div class="small-4 columns">
                        <input type="number" id="num-numbers" name="num-numbers" placeholder="Number of words">
                    </div>
                </div>

                <div class="row">
                    <label>Separator</label>
                    <select name="separator">
                        <option value="hyphen" <?php if (isset($_POST['separator']) && $_POST['separator'] == 'hyphen') echo 'selected'; ?>>Hyphen</option>
                        <option value="comma" <?php if (isset($_POST['separator']) && $_POST['separator'] == 'comma') echo 'selected'; ?>>Comma</option>
                        <option value="space" <?php if (isset($_POST['separator']) && $_POST['separator'] == 'space') echo 'selected'; ?>>Space</option>
                        <option value="underscore" <?php if (isset($_POST['separator']) && $_POST['separator'] == 'underscore') echo 'selected'; ?>>Underscore</option>
                        <option value="period" <?php if (isset($_POST['separator']) && $_POST['separator'] == 'period') echo 'selected'; ?>>Period</option>
                    </select>
                </div>
                
                <p><input type="submit" class="button expanded" value="Generate Password"></p>
                <p class="text-center"><a href="http://xkcd.com/936/">Inspiration?</a></p>   
            </div>
        </form>
    </div>
</div>